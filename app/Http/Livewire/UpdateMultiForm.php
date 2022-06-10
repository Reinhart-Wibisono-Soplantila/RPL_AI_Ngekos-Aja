<?php

namespace App\Http\Livewire;

use App\Models\aturan_fasilitas_indekosan;
use App\Models\data_indekosan;
use App\Models\gambar_indekosan;
use App\Models\info_sewa;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UpdateMultiForm extends Component
{
    use WithFileUploads;
    // DB - Data Indekos
    public $Nama_indekos;
    // public $Id_kos;
    public $Deskripsi_indekos;
    public $Tipe_kamar;
    public $Gender_kamar;
    public $address_link;
    public $Alamat;
    public $Kabupaten_kota;
    public $Kecamatan;
    public $Panjang_kamar;
    public $Lebar_kamar;
    public $Jumlah_seluruh_kamar;
    public $Jumlah_ketersediaan_kamar;

    // DB - Foto Kos
    public $Foto_tampak_depan;
    public $Foto_tampak_dalam;
    public $Foto_dari_jalan;
    public $Foto_depan_kamar;
    public $Foto_dalam_kamar;
    public $Foto_kamar_mandi;
    public $Foto_lainnya;

    // DB - Peraturan dan Fasilitas Kos
    public $Fasilitas_lain;
    public $Fasilitas_umum = [];
    public $Fasilitas_kamar = [];
    public $Fasilitas_kamar_mandi = [];
    public $Peraturan = [];
    public $Peraturan_lain;
    public $Tanggal_dibangun;

    // DB - info sewa
    public $Jangka_waktu_sewa;
    public $Uang_muka;
    public $Harga_sewa_per3bulan;
    public $Harga_sewa_per6bulan;
    public $Harga_sewa_perbulan;
    // public $Harga_sewa;
    public $Harga_sewa_pertahun;

    public $totalStep = 7;
    public $currentStep = 1;
    public $tes;
    public $old_Foto_tampak_depan;

    public $Foto1, $Foto2, $Foto3, $Foto4, $Foto5, $Foto6, $Foto7;

    public function mount($data_indekosan)
    {
        $this->currentStep = 1;

        $datas = DB::table('data_indekosans')
            // ->join('data_indekosans', 'users.Id_kos', '=', 'data_indekosans.Id_kos')
            ->join('gambar_indekosans', 'data_indekosans.Id_kos', '=', 'gambar_indekosans.Id_kos')
            ->join('aturan_fasilitas_indekosans', 'gambar_indekosans.Id_kos', '=', 'aturan_fasilitas_indekosans.Id_kos')
            ->join('info_sewas', 'aturan_fasilitas_indekosans.Id_kos', '=', 'info_sewas.Id_kos')
            ->where('data_indekosans.Id_kos', $data_indekosan)
            ->get();
        if ($datas) {
            $this->Nama_indekos = $datas[0]->Nama_indekos;
            $this->Deskripsi_indekos = $datas[0]->Deskripsi_indekos;
            $this->Tipe_kamar = $datas[0]->Tipe_kamar;
            // $this->Gender_kamar = $datas[0]->Gender_kamar;
            $this->Tanggal_dibangun = $datas[0]->Tanggal_dibangun;
            $this->Peraturan_lain = $datas[0]->Peraturan_lain;
            $this->address_link = $datas[0]->address_link;
            $this->Alamat = $datas[0]->Alamat;
            $this->Kabupaten_kota = $datas[0]->Kabupaten_kota;
            $this->Kecamatan = $datas[0]->Kecamatan;

            $this->Panjang_kamar = $datas[0]->Panjang_kamar;
            $this->Lebar_kamar = $datas[0]->Lebar_kamar;
            $this->Jumlah_seluruh_kamar = $datas[0]->Jumlah_seluruh_kamar;
            $this->Jumlah_ketersediaan_kamar = $datas[0]->Jumlah_ketersediaan_kamar;

            $this->Harga_sewa_pertahun = $datas[0]->Harga_sewa_pertahun;
            $this->Harga_sewa_per6bulan = $datas[0]->Harga_sewa_per6bulan;
            $this->Harga_sewa_per3bulan = $datas[0]->Harga_sewa_per3bulan;
            $this->Harga_sewa_perbulan = $datas[0]->Harga_sewa_perbulan;
            // $this->Harga_sewa = $datas[0]->Harga_sewa;

            // $this->Foto_tampak_depan = $datas[0]->Foto_tampak_depan;
        }
        $this->tes = $datas;
    }

    public function increaseStep()
    {
        $this->resetErrorBag();
        $this->validatedData();
        $this->currentStep++;
        if ($this->currentStep > $this->totalStep) {
            $this->currentStep = $this->totalStep;
        }
    }

    public function decreaseStep()
    {
        $this->resetErrorBag();
        $this->currentStep--;
        if ($this->currentStep < 1) {
            $this->currentStep = 1;
        }
    }

    public function validatedData()
    {
        if ($this->currentStep == 1) {

            $this->validate([
                "Peraturan" => 'required|array',
                // "Peraturan_lain" => "string",
                "Tanggal_dibangun" => "required",

                "Nama_indekos" => "required",
                "Deskripsi_indekos" => "required",
                "Tipe_kamar" => "required",
                "Gender_kamar" => "required",
            ]);
        } elseif ($this->currentStep == 2) {
            $this->validate([
                "address_link" => "required",
                "Alamat" => "required",
                "Kabupaten_kota" => "required",
                "Kecamatan" => "required",
            ]);
        } elseif ($this->currentStep == 3) {
            if ($this->Foto_tampak_depan != null) {
                $this->validate([
                    "Foto_tampak_depan" => "image|file|mimes:png,jpg,jpeg,svg|max:16384"
                ]);
            }
            if ($this->Foto_tampak_dalam != null) {
                $this->validate([
                    "Foto_tampak_dalam" => "image|file|mimes:png,jpg,jpeg,svg|max:16384",
                ]);
            }
            if ($this->Foto_dari_jalan != null) {
                $this->validate([
                    "Foto_dari_jalan" => "image|file|mimes:png,jpg,jpeg,svg|max:16384"
                ]);
            }
        } elseif ($this->currentStep == 4) {
            if ($this->Foto_depan_kamar != null) {
                $this->validate([
                    "Foto_depan_kamar" => "image|file|mimes:png,jpg,jpeg,svg|max:16384"
                ]);
            }
            if ($this->Foto_dalam_kamar != null) {
                $this->validate([
                    "Foto_dalam_kamar" => "image|file|mimes:png,jpg,jpeg,svg|max:16384"
                ]);
            }
            if ($this->Foto_kamar_mandi != null) {
                $this->validate([
                    "Foto_kamar_mandi" => "image|file|mimes:png,jpg,jpeg,svg|max:16384"
                ]);
            }
            if ($this->Foto_lainnya != null) {
                $this->validate([
                    "Foto_lainnya" => "image|file|mimes:png,jpg,jpeg,svg|max:16384"
                ]);
            }
            // $this->validate([
            //     "Foto_depan_kamar" => "image|file|mimes:png,jpg,jpeg,svg|max:16384",
            //     "Foto_dalam_kamar" => "image|file|mimes:png,jpg,jpeg,svg|max:16384",
            //     "Foto_kamar_mandi" => "image|file|mimes:png,jpg,jpeg,svg|max:16384",
            //     "Foto_lainnya" => "image|file|mimes:png,jpg,jpeg,svg|max:16384"
            // ]);
        } elseif ($this->currentStep == 5) {
            $this->validate([
                "Fasilitas_umum" => "required|array",
                "Fasilitas_kamar" => "required|array",
                "Fasilitas_kamar_mandi" => "required|array"
            ]);
        } elseif ($this->currentStep == 6) {
            $this->validate([
                "Panjang_kamar" => "required",
                "Lebar_kamar" => "required",
                "Jumlah_seluruh_kamar" => "required",
                "Jumlah_ketersediaan_kamar" => "required"
            ]);
        } elseif ($this->currentStep == 7) {
            $this->validate([
                "Jangka_waktu_sewa" => "required",
                "Uang_muka" => "required",
                "Harga_sewa_pertahun" => "required",
                "Harga_sewa_per6bulan" => "required",
                "Harga_sewa_per3bulan" => "required",
                "Harga_sewa_pertahun" => "required",
                // "Harga_sewa" => "required"
            ]);
        }

        // return dd($this->Foto_tampak_depan);
    }

    public function update()
    {

        $validated = $this->validate([
            "Jangka_waktu_sewa" => "required",
            "Uang_muka" => "required",
            "Harga_sewa_pertahun" => "required",
            "Harga_sewa_per6bulan" => "required",
            "Harga_sewa_per3bulan" => "required",
            "Harga_sewa_pertahun" => "required",
            // "Harga_sewa" => "required"
        ]);
        $this->resetErrorBag();
        // $id_kos = Str::random(10);
        // $id_kos = $this->Nama_indekos . $id_kos;
        $values_data_indekos = array(
            "UserId" => auth()->user()->UserId,
            // "Id_kos" => $id_kos,
            "Nama_indekos" => $this->Nama_indekos,
            "Deskripsi_indekos" => $this->Deskripsi_indekos,
            "Tipe_Kamar" => $this->Tipe_kamar,
            "Gender_kamar" => $this->Gender_kamar,
            "address_link" => "required",
            "Alamat" => $this->Alamat,
            "Kabupaten_kota" => $this->Kabupaten_kota,
            "Kecamatan" => $this->Kecamatan,
            "Panjang_kamar" => $this->Panjang_kamar,
            "Lebar_kamar" => $this->Lebar_kamar,
            "Jumlah_seluruh_kamar" => $this->Jumlah_seluruh_kamar,
            "Jumlah_ketersediaan_kamar" => $this->Jumlah_ketersediaan_kamar
        );

        $values_aturan_indekos = array(
            "UserId" => auth()->user()->UserId,
            // "Id_kos" => $id_kos,
            "Peraturan" => json_encode($this->Peraturan),
            "Peraturan_lain" => $this->Peraturan_lain,
            "Fasilitas_umum" => json_encode($this->Fasilitas_umum),
            "Fasilitas_kamar" => json_encode($this->Fasilitas_kamar),
            "Fasilitas_kamar_mandi" => json_encode($this->Fasilitas_kamar_mandi),
            "Tanggal_dibangun" => $this->Tanggal_dibangun
        );

        $datas = $this->tes;
        // return dd($datas[0]->Nama_indekos);
        if ($this->Foto_tampak_depan != null) {
            Storage::delete($datas[0]['Foto_tampak_depan']);
            // $this->Foto_tampak_depan = $this->Foto_tampak_depan;
            $Foto1 = $this->Foto_tampak_depan->store('post-images/' . $this->tes[0]['Id_kos'], 'public');
        } else {
            // $Foto1 = explode('/', $this->tes[0]['Foto_tampak_depan']);
            $Foto1 = $datas[0]['Foto_tampak_depan'];
        }

        if ($this->Foto_tampak_dalam != null) {
            Storage::delete($datas[0]['Foto_tampak_dalam']);
            // $this->Foto_tampak_dalam = $this->Foto_tampak_dalam;
            $Foto2 = $this->Foto_tampak_dalam->store('post-images/' . $this->tes[0]['Id_kos'], 'public');
        } else {
            $Foto2 = $datas[0]['Foto_tampak_dalam'];
        }

        if ($this->Foto_dari_jalan != null) {
            Storage::delete($datas[0]['Foto_dari_jalan']);
            // $this->Foto_dari_jalan = $this->Foto_dari_jalan;
            $Foto3 = $this->Foto_dari_jalan->store('post-images/' . $this->tes[0]['Id_kos'], 'public');
        } else {
            $Foto3 = $datas[0]['Foto_dari_jalan'];
        }

        if ($this->Foto_depan_kamar != null) {
            Storage::delete($datas[0]['Foto_depan_kamar']);
            // $this->Foto_depan_kamar = $this->Foto_depan_kamar;
            $Foto4 = $this->Foto_depan_kamar->store('post-images/' . $this->tes[0]['Id_kos'], 'public');
        } else {
            $Foto4 = $datas[0]['Foto_depan_kamar'];
        }

        if ($this->Foto_dalam_kamar != null) {
            Storage::delete($datas[0]['Foto_dalam_kamar']);
            // $this->Foto_dalam_kamar = $this->Foto_dalam_kamar;
            $Foto5 = $this->Foto_dalam_kamar->store('post-images/' . $this->tes[0]['Id_kos'], 'public');
        } else {
            $Foto5 = $datas[0]['Foto_dalam_kamar'];
        }

        if ($this->Foto_kamar_mandi != null) {
            Storage::delete($datas[0]['Foto_kamar_mandi']);
            // $this->Foto6 = $this->Foto_kamar_mandi;
            $Foto6 = $this->Foto_kamar_mandi->store('post-images/' . $this->tes[0]['Id_kos'], 'public');
        } else {
            $Foto6 = $datas[0]['Foto_kamar_mandi'];
        }

        if ($this->Foto_lainnya != null) {
            Storage::delete($datas[0]['Foto_lainnya']);
            // $this->Foto7 = $this->Foto_lainnya;
            $Foto7 = $this->Foto_lainnya->store('post-images/' . $this->tes[0]['Id_kos'], 'public');
        } else {
            $Foto7 = $datas[0]['Foto_lainnya'];
        }

        $values_gambar_indekos = array(
            "UserId" => auth()->user()->UserId,
            // "Id_kos" => $id_kos,
            "Foto_tampak_depan" => $Foto1,
            "Foto_tampak_dalam" => $Foto2,
            "Foto_dari_jalan" => $Foto3,
            "Foto_depan_kamar" => $Foto4,
            "Foto_dalam_kamar" => $Foto5,
            "Foto_kamar_mandi" => $Foto6,
            "Foto_lainnya" => $Foto7
        );



        $values_info_sewa = array(
            "UserId" => auth()->user()->UserId,
            // "Id_kos" => $id_kos,
            "Jangka_waktu_sewa" => $this->Jangka_waktu_sewa,
            "Uang_muka" => $this->Uang_muka,
            "Harga_sewa_pertahun" => $this->Harga_sewa_pertahun,
            "Harga_sewa_per6bulan" => $this->Harga_sewa_per6bulan,
            "Harga_sewa_per3bulan" => $this->Harga_sewa_per3bulan,
            "Harga_sewa_perbulan" => $this->Harga_sewa_perbulan,
            // "Harga_sewa" => $this->Harga_sewa
        );

        data_indekosan::where('Id_kos', $this->tes[0]['Id_kos'])->update($values_data_indekos);
        aturan_fasilitas_indekosan::where('Id_kos', $this->tes[0]['Id_kos'])->update($values_aturan_indekos);
        gambar_indekosan::where('Id_kos', $this->tes[0]['Id_kos'])->update($values_gambar_indekos);
        info_sewa::where('Id_kos', $this->tes[0]['Id_kos'])->update($values_info_sewa);
        // data_indekosan::insert($values_data_indekos);
        // aturan_fasilitas_indekosan::insert($values_aturan_indekos);
        // gambar_indekosan::insert($values_gambar_indekos);
        // info_sewa::insert($values_info_sewa);
        $this->currentStep = 1;
        // return route('/pemilik-kos/homepage');
    }

    public function render()
    {

        return view('livewire.update-multi-form', [

            'datas' => $this->tes
        ]);
        // $datas = $this->tes;
        // return dd($this->tes);
    }
}
