<?php

namespace App\Http\Livewire;

use App\Models\aturan_fasilitas_indekosan;
use App\Models\data_indekosan;
use App\Models\gambar_indekosan;
use App\Models\info_sewa;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;


class MultiStepForm extends Component
{
    use WithFileUploads;
    // DB - Data Indekos
    public $Nama_indekos;
    public $Id_kos;
    public $Deskripsi_indekos;
    public $Tipe_kamar;
    public $Gender_kamar;
    public $Alamat;
    public $address_link;
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

    public function mount()
    {
        $this->currentStep = 1;
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
            $this->validate([
                "Foto_tampak_depan" => "required|image|file|mimes:png,jpg,jpeg,svg|max:16384",
                "Foto_tampak_dalam" => "required|image|file|mimes:png,jpg,jpeg,svg|max:16384",
                "Foto_dari_jalan" => "required|image|file|mimes:png,jpg,jpeg,svg|max:16384"
            ]);
        } elseif ($this->currentStep == 4) {
            $this->validate([
                "Foto_depan_kamar" => "required|image|file|mimes:png,jpg,jpeg,svg|max:16384",
                "Foto_dalam_kamar" => "required|image|file|mimes:png,jpg,jpeg,svg|max:16384",
                "Foto_kamar_mandi" => "required|image|file|mimes:png,jpg,jpeg,svg|max:16384",
                "Foto_lainnya" => "required|image|file|mimes:png,jpg,jpeg,svg|max:16384"
            ]);
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
                "Harga_sewa_perbulan" => "required",
                "Harga_sewa_per6bulan" => "required",
                "Harga_sewa_per3bulan" => "required",
                "Harga_sewa_pertahun" => "required",
                // "Harga_sewa" => "required"
            ]);
        }

        // return dd($this->Foto_tampak_depan);
    }


    public function register()
    {

        $validated = $this->validate([
            "Peraturan" => 'required|array',
            // "Peraturan_lain" => "string",
            "Tanggal_dibangun" => "required",
            "Nama_indekos" => "required",
            "Deskripsi_indekos" => "required",
            "Tipe_kamar" => "required",
            "Gender_kamar" => "required",
            "Alamat" => "required",
            "address_link" => "required",
            "Kabupaten_kota" => "required",
            "Kecamatan" => "required",
            "Foto_tampak_depan" => "required|image|file|max:16384",
            "Foto_tampak_dalam" => "required|image|file|max:16384",
            "Foto_dari_jalan" => "required|image|file|max:16384",
            "Foto_depan_kamar" => "required|image|file|max:16384",
            "Foto_dalam_kamar" => "required|image|file|max:16384",
            "Foto_kamar_mandi" => "required|image|file|max:16384",
            "Foto_lainnya" => "required|image|file|max:16384",
            "Fasilitas_umum" => "required|array",
            "Fasilitas_kamar" => "required|array",
            "Fasilitas_kamar_mandi" => "required|array",
            "Panjang_kamar" => "required",
            "Lebar_kamar" => "required",
            "Jumlah_seluruh_kamar" => "required",
            "Jumlah_ketersediaan_kamar" => "required",
            "Jangka_waktu_sewa" => "required",
            "Uang_muka" => "required",
            "Harga_sewa_perbulan" => "required",
            "Harga_sewa_per6bulan" => "required",
            "Harga_sewa_per3bulan" => "required",
            "Harga_sewa_pertahun" => "required",
            // "Harga_sewa" => "required"
        ]);
        $this->resetErrorBag();
        $id_kos = Str::random(10);
        $nama_kos = explode(' ', $this->Nama_indekos);
        if (sizeof($nama_kos) > 1) {
            $id_kos = $nama_kos[0] . $id_kos . $nama_kos[sizeof($nama_kos) - 1] . $id_kos;
        } else {
            $id_kos = $nama_kos[0] . $id_kos;
        }
        preg_match('~iframe.*src="([^"]*)"~', $this->address_link, $result);
        $values_data_indekos = array(
            "UserId" => auth()->user()->UserId,
            "Id_kos" => $id_kos,
            "Nama_indekos" => $this->Nama_indekos,
            "Deskripsi_indekos" => $this->Deskripsi_indekos,
            "Tipe_Kamar" => $this->Tipe_kamar,
            "Gender_kamar" => $this->Gender_kamar,
            "address_link" => $result[1],
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
            "Id_kos" => $id_kos,
            "Peraturan" => json_encode($this->Peraturan),
            "Peraturan_lain" => $this->Peraturan_lain,
            "Fasilitas_umum" => json_encode($this->Fasilitas_umum),
            "Fasilitas_kamar" => json_encode($this->Fasilitas_kamar),
            "Fasilitas_kamar_mandi" => json_encode($this->Fasilitas_kamar_mandi),
            "Tanggal_dibangun" => $this->Tanggal_dibangun
        );

        $values_gambar_indekos = array(
            "UserId" => auth()->user()->UserId,
            "Id_kos" => $id_kos,
            "Foto_tampak_depan" => $this->Foto_tampak_depan->store('post-images/' . $id_kos, 'public'),
            "Foto_tampak_dalam" => $this->Foto_tampak_dalam->store('post-images/' . $id_kos, 'public'),
            "Foto_dari_jalan" => $this->Foto_dari_jalan->store('post-images/' . $id_kos, 'public'),
            "Foto_depan_kamar" => $this->Foto_depan_kamar->store('post-images/' . $id_kos, 'public'),
            "Foto_dalam_kamar" => $this->Foto_dalam_kamar->store('post-images/' . $id_kos, 'public'),
            "Foto_kamar_mandi" => $this->Foto_kamar_mandi->store('post-images/' . $id_kos, 'public'),
            "Foto_lainnya" => $this->Foto_lainnya->store('post-images/' . $id_kos, 'public')
        );

        $values_info_sewa = array(
            "UserId" => auth()->user()->UserId,
            "Id_kos" => $id_kos,
            "Jangka_waktu_sewa" => $this->Jangka_waktu_sewa,
            "Uang_muka" => $this->Uang_muka,
            "Harga_sewa_pertahun" => $this->Harga_sewa_pertahun,
            "Harga_sewa_per6bulan" => $this->Harga_sewa_per6bulan,
            "Harga_sewa_per3bulan" => $this->Harga_sewa_per3bulan,
            "Harga_sewa_perbulan" => $this->Harga_sewa_perbulan,
            // "Harga_sewa" => $this->Harga_sewa
        );


        // $this->Foto_tampak_depan->store('post-images/' . $id_kos, 'public');
        // $this->Foto_tampak_dalam->store('post-images/' . $id_kos, 'public');
        // $this->Foto_dari_jalan->store('post-images/' . $id_kos, 'public');
        // $this->Foto_depan_kamar->store('post-images/' . $id_kos, 'public');
        // $this->Foto_dalam_kamar->store('post-images/' . $id_kos, 'public');
        // $this->Foto_kamar_mandi->store('post-images/' . $id_kos, 'public');
        // $this->Foto_lainnya->store('post-images/' . $id_kos, 'public');

        data_indekosan::insert($values_data_indekos);
        aturan_fasilitas_indekosan::insert($values_aturan_indekos);
        gambar_indekosan::insert($values_gambar_indekos);
        info_sewa::insert($values_info_sewa);
        $this->currentStep = 1;
        // return view('Page.Page_Pemilik_Kos.homepage_pemilikkost');
    }

    public function render()
    {
        return view('livewire.multi-step-form');
    }
}
