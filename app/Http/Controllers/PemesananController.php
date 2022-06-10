<?php

namespace App\Http\Controllers;

use App\Models\data_indekosan;
use App\Models\feedback;
use App\Models\konfirmasi_pemesanan;
use App\Models\pemesanan;
use App\Models\penghuni_indekos;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PemesananController extends Controller
{
    public function index($data)
    {
        // cek pemesan sudah terdaftar di kos yang sama atau belum
        $count = DB::table('penghuni_indekos')->where([['Id_kos', '=', $data], ['Penghuni_Id', '=', auth()->user()->UserId]])->count();
        if ($count == 0) {
            // cek apakah pesanan sudah ada atau belum
            $count = DB::table('pemesanans')->where([['Id_kos', '=', $data], ['UserId', '=', auth()->user()->UserId]])->count();
            if ($count == 0) {
                $datas_kos = DB::table('data_indekosans')
                    ->join('info_sewas', 'data_indekosans.Id_kos', '=', 'info_sewas.Id_kos')
                    ->where('data_indekosans.Id_kos', $data)
                    ->get();
                return view('Page.Page_Pencari_Kos.Booking.data_booking', ['datas' => $datas_kos]);
            } else {
                // AMbil data dari tabel konfirmasi pemesanan
                $datas = konfirmasi_pemesanan::where([['Id_kos', '=', $data], ['UserId', '=', auth()->user()->UserId]])->get();

                // Cek apakah sudah pengguna ingin mengonfirmasi
                // JIka sudah memesan
                if ($datas[0]->Konfirmasi_pencarian_pencari == 'Ya') {
                    // ambil jam sekarang
                    $current_time = new Carbon();
                    $current_time->timezone('GMT+8');
                    $current_time = $current_time->toDateTimeString();

                    // cek apakah pemilik setuju
                    // kalau pemilik setuju
                    if ($datas[0]->Konfirmasi_pencarian_pemilik == 'Ya') {

                        // cek apakah pencari sudah menyetujui pembayaran
                        // kalau pencari sudah menyetujui pembayaran
                        if ($datas[0]->Konfirmasi_pembayaran_pencari == 'Ya') {

                            if ($datas[0]->Konfirmasi_pembayaran_pemilik == 'Ya') {
                                return view('Page.Page_Pencari_Kos.FeedbackBooking.booking_sukses');
                            } else {
                                // pencari belum melakukan pembayaran tetapi waktu belum habis
                                if ($current_time <= $datas[0]->Jam_pembayaran_selesai) {
                                    // Ambil nomor telepon
                                    $Id_kos = DB::table('pemesanans')
                                        ->select('Id_kos')
                                        ->where('pemesanans.Id_kos', $datas[0]->Id_pemesanan)
                                        ->get();
                                    // $Id_kos = json_decode(json_encode($Id_kos), true);
                                    $Id_kos = json_decode(json_encode($Id_kos), true);

                                    $UserId = DB::table('data_indekosans')
                                        ->select('UserId')
                                        ->where('data_indekosans.Id_kos', $Id_kos)
                                        ->get();
                                    $UserId = json_decode(json_encode($UserId), true);

                                    $datas = DB::table('pemesanans')
                                        ->join('konfirmasi_pemesanans', 'pemesanans.Id_pemesanan', '=', 'konfirmasi_pemesanans.Id_pemesanan')
                                        ->join('data_indekosans', 'pemesanans.Id_kos', '=', 'data_indekosans.Id_kos')
                                        ->join('users', 'users.UserId', '=', 'data_indekosans.UserId')
                                        ->where([['pemesanans.Id_pemesanan', $datas[0]->Id_pemesanan], ['data_indekosans.Id_kos', $Id_kos], ['data_indekosans.UserId', $UserId]])
                                        ->get();
                                    return view('Page.Page_Pencari_Kos.Booking.konfirmasi_pembayaran', ['datas' => $datas]);
                                    // return dd($datas);
                                }

                                // pencari belum melakukan pembayaran tetapi waktu habis
                                else {
                                    $datas_kos = DB::table('data_indekosans')
                                        ->join('info_sewas', 'data_indekosans.Id_kos', '=', 'info_sewas.Id_kos')
                                        ->where('data_indekosans.Id_kos', $data)
                                        ->get();
                                    DB::table('pemesanans')->where('Id_pemesanan', $datas[0]->Id_pemesanan)->delete();
                                    DB::table('konfirmasi_pemesanans')->where('Id_pemesanan', $datas[0]->Id_pemesanan)->delete();
                                    return view('Page.Page_Pencari_Kos.Booking.data_booking', ['datas' => $datas_kos]);
                                }
                                // if ($datas[0]->Konfirmasi_pembayaran_pemilik == 'Ya') {
                                //     return dd("Konfirmasi pembayaran pemilik");
                                // }
                            }
                        } else {
                            // apakah jamnya pembayran habis atau belum supaya ada batas
                            if ($current_time <= $datas[0]->Jam_konfimasi_selesai) {
                                $datas = DB::table('pemesanans')
                                    ->join('konfirmasi_pemesanans', 'pemesanans.Id_pemesanan', '=', 'konfirmasi_pemesanans.Id_pemesanan')
                                    ->where('pemesanans.Id_pemesanan', $datas[0]->Id_pemesanan)
                                    ->get();
                                return view('Page.Page_Pencari_Kos.Booking.konfirmasi_penerimaan', ['datas' => $datas]);
                            } else {
                                DB::table('pemesanans')->where('Id_pemesanan', $datas[0]->Id_pemesanan)->delete();
                                DB::table('konfirmasi_pemesanans')->where('Id_pemesanan', $datas[0]->Id_pemesanan)->delete();
                                return view('Page.Page_Pencari_Kos.FeedbackBooking.booking_ditolak', ['datas' => $datas]);
                            }
                        }
                    }
                    // kalau ditolak
                    elseif ($datas[0]->Konfirmasi_pencarian_pemilik == 'Tolak') {
                        if ($current_time <= $datas[0]->Jam_pembayaran_selesai) {
                            $datas = DB::table('pemesanans')
                                ->join('konfirmasi_pemesanans', 'pemesanans.Id_pemesanan', '=', 'konfirmasi_pemesanans.Id_pemesanan')
                                ->join('feedback', 'pemesanans.Id_pemesanan', '=', 'feedback.Id_pemesanan')
                                ->where('pemesanans.Id_pemesanan', $datas[0]->Id_pemesanan)
                                ->get();
                            DB::table('pemesanans')->where('Id_pemesanan', $datas[0]->Id_pemesanan)->delete();
                            DB::table('konfirmasi_pemesanans')->where('Id_pemesanan', $datas[0]->Id_pemesanan)->delete();
                            DB::table('feedback')->where('Id_pemesanan', $datas[0]->Id_pemesanan)->delete();
                            return view('Page.Page_Pencari_Kos.FeedbackBooking.booking_ditolak', ['datas' => $datas]);
                        } else {
                            $datas_kos = DB::table('data_indekosans')
                                ->join('info_sewas', 'data_indekosans.Id_kos', '=', 'info_sewas.Id_kos')
                                ->where('data_indekosans.Id_kos', $data)
                                ->get();
                            DB::table('pemesanans')->where('Id_pemesanan', $datas[0]->Id_pemesanan)->delete();
                            DB::table('konfirmasi_pemesanans')->where('Id_pemesanan', $datas[0]->Id_pemesanan)->delete();
                            DB::table('feedback')->where('Id_pemesanan', $datas[0]->Id_pemesanan)->delete();
                            return view('Page.Page_Pencari_Kos.Booking.data_booking', ['datas' => $datas_kos]);
                        }
                    }
                    // kalau belum disetujui pemilik dan belum waktu habis
                    elseif ($current_time <= $datas[0]->Jam_konfimasi_selesai) {
                        $Id_kos = DB::table('pemesanans')
                            ->select('Id_kos')
                            ->where('pemesanans.Id_kos', $datas[0]->Id_pemesanan)
                            ->get();
                        // $Id_kos = json_decode(json_encode($Id_kos), true);
                        $Id_kos = json_decode(json_encode($Id_kos), true);

                        $UserId = DB::table('data_indekosans')
                            ->select('UserId')
                            ->where('data_indekosans.Id_kos', $Id_kos)
                            ->get();
                        $UserId = json_decode(json_encode($UserId), true);

                        $datas = DB::table('pemesanans')
                            ->join('konfirmasi_pemesanans', 'pemesanans.Id_pemesanan', '=', 'konfirmasi_pemesanans.Id_pemesanan')
                            ->join('data_indekosans', 'pemesanans.Id_kos', '=', 'data_indekosans.Id_kos')
                            ->join('users', 'users.UserId', '=', 'data_indekosans.UserId')
                            ->where([['pemesanans.Id_pemesanan', $datas[0]->Id_pemesanan], ['data_indekosans.Id_kos', $Id_kos], ['data_indekosans.UserId', $UserId]])
                            ->get();
                        return view('Page.Page_Pencari_Kos.Booking.menunggu_konfirmasi_booking', ['datas' => $datas]);
                        // return dd($datas);
                    } else {
                        $datas_kos = DB::table('data_indekosans')
                            ->join('info_sewas', 'data_indekosans.Id_kos', '=', 'info_sewas.Id_kos')
                            ->where('data_indekosans.Id_kos', $data)
                            ->get();
                        DB::table('pemesanans')->where('Id_pemesanan', $datas[0]->Id_pemesanan)->delete();
                        DB::table('konfirmasi_pemesanans')->where('Id_pemesanan', $datas[0]->Id_pemesanan)->delete();
                        return view('Page.Page_Pencari_Kos.Booking.data_booking', ['datas' => $datas_kos]);
                    }
                } else {
                    // JIka belum memesan
                    $datas = pemesanan::where([['Id_kos', '=', $data], ['UserId', '=', auth()->user()->UserId]])->get();
                    return view('Page.Page_Pencari_Kos.Booking.konfirmasi_booking', ['datas' => $datas]);
                }
            }
        } else {
            return view('Page.Page_Pencari_Kos.FeedbackBooking.booking_sukses');
        }
    }

    public function input(Request $request)
    {
        $validated = $request->validate([
            'Jenis_kelamin' => 'required',
            'Nomor_telepon' => 'integer|required',
            'Masa_pembayaran_kos' => 'required',
            'Tanggal_menetap' => 'required',
            'Jumlah_lama_menetap' => 'required',
            'Satuan_lama_menetap' => 'required'
        ]);
        // Get Id
        $Id_kos = $request->Id_kos;
        $datas = DB::table('info_sewas')
            ->where('Id_kos', $Id_kos)
            ->get();

        // Get Kategori pembayaran 
        if ($request->Masa_pembayaran_kos == "Harga_sewa_perbulan") {
            $sewa = $datas[0]->Harga_sewa_perbulan;
            $lama_sewa = "bulan";
            $divided = 1;
        } elseif ($request->Masa_pembayaran_kos == "Harga_sewa_per3bulan") {
            $sewa = $datas[0]->Harga_sewa_per3bulan;
            $lama_sewa = "3 bulan";
            $divided = 3;
        } elseif ($request->Masa_pembayaran_kos == "Harga_sewa_per6bulan") {
            $sewa = $datas[0]->Harga_sewa_per6bulan;
            $lama_sewa = "6 bulan";
            $divided = 6;
        } elseif ($request->Masa_pembayaran_kos == "Harga_sewa_pertahun") {
            $sewa = $datas[0]->Harga_sewa_pertahun;
            $lama_sewa = "tahun";
            $divided = 12;
        }

        // Create the total harga 
        $Total = '';
        $Total_str = explode('.', $sewa);
        $count = sizeof($Total_str);
        for ($i = 0; $i < $count; $i++) {
            $Total = $Total . $Total_str[$i];
        }

        $Total_Harga = (int)$Total;
        // if ($request->Satuan_lama_menetap == "Bulan") {
        //     $num = 1;
        // } elseif ($request->Satuan_lama_menetap == "Tahun") {
        //     $num = 12;
        // }

        // $Total =  $num * (int)$request->Jumlah_lama_menetap;
        $Total_harga = ((int)$request->Jumlah_lama_menetap / $divided) * $Total_Harga;

        $Total = (string)$Total_harga;
        $Total = strrev($Total);
        $Total = str_split($Total, 3);

        $count = sizeof($Total);
        $result = $Total[0];
        for ($i = 1; $i < $count; $i++) {
            $result = $result . '.' . $Total[$i];
        }
        $result = strrev($result);

        // create Id_pemesanan 
        $Id_pemesanan_user =  str_split($request->UserId, 3);
        $Id_pemesanan_kos =  str_split($request->Id_kos, 3);
        $Id_pemesanan_random =  Str::random(15);
        $Id_pemesanan = $Id_pemesanan_kos[0] . $Id_pemesanan_random . $Id_pemesanan_user[0];

        $values = array(
            "UserId" => $request->UserId,
            "Id_pemesanan" => $Id_pemesanan,
            "Nama_kos" => $request->Nama_kos,
            "Jenis_kelamin_kamar" => $request->Jenis_kelamin_kamar,
            "Id_kos" => $request->Id_kos,
            "Nama" => $request->Nama,
            "Email" => $request->Email,
            "Harga_sewa" => $sewa,
            "Total_harga" => $result,
            "Jenis_kelamin" => $request->Jenis_kelamin,
            "Nomor_telepon" => $request->Nomor_telepon,
            "Masa_pembayaran_kos" => $lama_sewa,
            "Tanggal_menetap" => $request->Tanggal_menetap,
            "Jumlah_lama_menetap" => $request->Jumlah_lama_menetap,
            "Satuan_lama_menetap" => $request->Satuan_lama_menetap,
        );

        $timeConfirmation = array(
            "UserId" => $request->UserId,
            "Id_kos" => $request->Id_kos,
            "Id_pemesanan" => $Id_pemesanan,
            "Konfirmasi_pencarian_pencari" => "Tidak",
            "Konfirmasi_pencarian_pemilik" => "Tidak",
            "Konfirmasi_pembayaran_pencari" => "Tidak",
            "Konfirmasi_pembayaran_pemilik" => "Tidak",
            "Jam_konfimasi_mulai" => Null,
            "Jam_konfimasi_selesai" => Null,
            "Jam_pembayaran_mulai" => Null,
            "Jam_pembayaran_selesai" => Null
        );




        // Check if data pemesanan exist or not
        $count = DB::table('pemesanans')->where([['Id_kos', '=', $request->Id_kos], ['UserId', '=', $request->UserId]])->count();
        if ($count > 0) {
            pemesanan::where([['Id_kos', '=', $request->Id_kos], ['UserId', '=', $request->UserId]])->update($values);
        } else {
            pemesanan::create($values);
        }

        // Check if data konfirmasi_pemesanan exist or not
        $count = DB::table('konfirmasi_pemesanans')->where([['Id_kos', '=', $request->Id_kos], ['UserId', '=', $request->UserId]])->count();
        if ($count > 0) {
            konfirmasi_pemesanan::where([['Id_kos', '=', $request->Id_kos], ['UserId', '=', $request->UserId]])->update($timeConfirmation);
        } else {
            konfirmasi_pemesanan::create($timeConfirmation);
        }

        $datas = pemesanan::where([['Id_kos', '=', $request->Id_kos], ['UserId', '=', $request->UserId]])->get();
        return view('Page.Page_Pencari_Kos.Booking.konfirmasi_booking', ['datas' => $datas]);
    }

    public function waiting($data)
    {
        $time_start = new Carbon();
        $time_start->timezone('GMT+8');
        $time_start = $time_start->toDateTimeString();

        $time_finish = new Carbon();
        $time_finish->timezone('GMT+8');
        $time_finish->addHours(1);
        $time_finish = $time_finish->toDateTimeString();
        // $time -> timezone()
        $timeConfirmation = array(
            "Konfirmasi_pencarian_pencari" => "Ya",
            "Konfirmasi_pencarian_pemilik" => "Tidak",
            "Konfirmasi_pembayaran_pencari" => "Tidak",
            "Konfirmasi_pembayaran_pemilik" => "Tidak",
            "Jam_konfimasi_mulai" => $time_start,
            "Jam_konfimasi_selesai" => $time_finish,
            "Jam_pembayaran_mulai" => Null,
            "Jam_pembayaran_selesai" => Null
        );
        $datas = konfirmasi_pemesanan::where('Id_pemesanan', '=', $data)->update($timeConfirmation);

        $Id_kos = DB::table('pemesanans')
            ->select('Id_kos')
            ->where('pemesanans.Id_kos', $data)
            ->get();
        // $Id_kos = json_decode(json_encode($Id_kos), true);
        $Id_kos = json_decode(json_encode($Id_kos), true);

        $UserId = DB::table('data_indekosans')
            ->select('UserId')
            ->where('data_indekosans.Id_kos', $Id_kos)
            ->get();
        $UserId = json_decode(json_encode($UserId), true);

        $datas = DB::table('pemesanans')
            ->join('konfirmasi_pemesanans', 'pemesanans.Id_pemesanan', '=', 'konfirmasi_pemesanans.Id_pemesanan')
            ->join('data_indekosans', 'pemesanans.Id_kos', '=', 'data_indekosans.Id_kos')
            ->join('users', 'users.UserId', '=', 'data_indekosans.UserId')
            ->where([['pemesanans.Id_pemesanan', $data], ['data_indekosans.Id_kos', $Id_kos], ['data_indekosans.UserId', $UserId]])
            ->get();

        // return dd($datas);
        return view('Page.Page_Pencari_Kos.Booking.menunggu_konfirmasi_booking', ['datas' => $datas]);
    }

    public function booking($data)
    {
        $Id_kos = DB::table('pemesanans')
            ->select('Id_kos')
            ->where('pemesanans.Id_kos', $data)
            ->get();
        // $Id_kos = json_decode(json_encode($Id_kos), true);
        $Id_kos = json_decode(json_encode($Id_kos), true);

        $UserId = DB::table('data_indekosans')
            ->select('UserId')
            ->where('data_indekosans.Id_kos', $Id_kos)
            ->get();
        $UserId = json_decode(json_encode($UserId), true);

        $time_start = new Carbon();
        $time_start->timezone('GMT+8');
        $time_start = $time_start->toDateTimeString();

        $time_finish = new Carbon();
        $time_finish->timezone('GMT+8');
        $time_finish->addHours(1);
        $time_finish = $time_finish->toDateTimeString();

        $timeConfirmation = array(
            "Konfirmasi_pembayaran_pencari" => "Ya",
            "Jam_pembayaran_mulai" => $time_start,
            "Jam_pembayaran_selesai" => $time_finish
        );
        $update_data = konfirmasi_pemesanan::where('Id_pemesanan', '=', $data)->update($timeConfirmation);

        $datas = DB::table('pemesanans')
            ->join('konfirmasi_pemesanans', 'pemesanans.Id_pemesanan', '=', 'konfirmasi_pemesanans.Id_pemesanan')
            ->join('data_indekosans', 'pemesanans.Id_kos', '=', 'data_indekosans.Id_kos')
            ->join('users', 'users.UserId', '=', 'data_indekosans.UserId')
            ->where([['pemesanans.Id_pemesanan', $data], ['data_indekosans.Id_kos', $Id_kos], ['data_indekosans.UserId', $UserId]])
            ->get();
        return view('Page.Page_Pencari_Kos.Booking.konfirmasi_pembayaran', ['datas' => $datas]);
    }

    public function indexPemilik($data_indekosan)
    {
        $current_time = new Carbon();
        $current_time->timezone('GMT+8');
        $current_time = $current_time->toDateTimeString();

        // hitung ada tidak pesanan
        $count = DB::table('pemesanans')->where('Id_kos', '=', $data_indekosan)->count();

        if ($count > 0) {
            $Id_pemesanan = DB::table('konfirmasi_pemesanans')
                ->select('Id_pemesanan', 'konfirmasi_pencarian_pemilik', 'Jam_pembayaran_selesai', 'konfirmasi_pembayaran_pencari')
                ->where('konfirmasi_pemesanans.Id_kos', $data_indekosan)
                ->get();
            $Id_pemesanan = json_decode(json_encode($Id_pemesanan), true);

            for ($i = 0; $i < $count; $i++) {
                // $datas_konfirmasi[] = konfirmasi_pemesanan::where([['Id_kos', '=', $data_indekosan], ['Id_pemesanan', $Id_pemesanan[$i]]])->get();
                $datas_konfirmasi[] = konfirmasi_pemesanan::where('Id_kos', '=', $data_indekosan)->get();
            }

            // fitur delete otomatis
            for ($i = 0; $i < $count; $i++) {
                // tidak dikonfirmasi pemilik
                if ($Id_pemesanan[$i]['konfirmasi_pencarian_pemilik'] == 'Tidak') {
                    // jamnya habis
                    if ($current_time >= $datas_konfirmasi[$i][0]->Jam_konfimasi_selesai) {
                        DB::table('pemesanans')->where('Id_pemesanan', $datas_konfirmasi[$i][0]->Id_pemesanan)->delete();
                        DB::table('konfirmasi_pemesanans')->where('Id_pemesanan', $datas_konfirmasi[$i][0]->Id_pemesanan)->delete();
                    }
                }
                // pembayaran disetujui pencari
                elseif ($Id_pemesanan[$i]['konfirmasi_pembayaran_pencari'] == 'Ya') {
                    // kalau jamnya habis
                    // if ($Id_pemesanan[$i]['Jam_pembayaran_selesai'] != null) {
                    if ($current_time >= $Id_pemesanan[$i]['Jam_pembayaran_selesai']) {
                        DB::table('pemesanans')->where('Id_pemesanan', $datas_konfirmasi[$i][0]->Id_pemesanan)->delete();
                        DB::table('konfirmasi_pemesanans')->where('Id_pemesanan', $datas_konfirmasi[$i][0]->Id_pemesanan)->delete();
                    }
                    // }
                }
            }
        }


        $count = DB::table('pemesanans')->where('Id_kos', '=', $data_indekosan)->count();

        if ($count > 0) {
            for ($i = 0; $i < $count; $i++) {
                $datas[] = DB::table('pemesanans')
                    // ->join('data_indekosans', 'pemesanans.Id_kos', '=', 'data_indekosans.Id_kos')
                    ->join('konfirmasi_pemesanans', 'pemesanans.Id_pemesanan', '=', 'konfirmasi_pemesanans.Id_pemesanan')
                    ->where([['pemesanans.Id_pemesanan', $Id_pemesanan[$i]], ['pemesanans.Id_kos', $data_indekosan]])
                    ->get();
            }
            return view('Page.Page_Pemilik_Kos.pemesanan', [
                'datas' => $datas
            ]);
            // return dd($datas);
        } else {
            $datas = [];
            return view('Page.Page_Pemilik_Kos.pemesanan', [
                'datas' => $datas
            ]);
        }
    }

    public function konfirmasiPemilik($data_pemesanan)
    {
        $datas = DB::table('pemesanans')
            ->join('konfirmasi_pemesanans', 'pemesanans.Id_pemesanan', '=', 'konfirmasi_pemesanans.Id_pemesanan')
            ->where('pemesanans.Id_pemesanan', $data_pemesanan)
            ->get();

        // return dd($datas);
        return view('Page.Page_Pemilik_Kos.Booking.konfirmasi_booking', ['datas' => $datas]);
    }

    public function pemilikMenerima($data)
    {
        $time_start = new Carbon();
        $time_start->timezone('GMT+8');
        $time_start = $time_start->toDateTimeString();

        $time_finish = new Carbon();
        $time_finish->timezone('GMT+8');
        $time_finish->addHours(1);
        $time_finish = $time_finish->toDateTimeString();

        // Ambil Id kos
        $Id_kos = DB::table('pemesanans')
            ->select('Id_kos')
            ->where('pemesanans.Id_pemesanan', $data)
            ->get();
        $Id_kos = json_decode(json_encode($Id_kos), true);

        // Ada berapa data yang sama dengan id kosnya
        $count = DB::table('pemesanans')->where('Id_kos', '=', $Id_kos)->count();

        // Ambil Id pemesanan
        $Id_pemesanan = DB::table('konfirmasi_pemesanans')
            ->select('Id_pemesanan', 'konfirmasi_pencarian_pemilik', 'Jam_pembayaran_selesai', 'konfirmasi_pembayaran_pencari')
            ->where('konfirmasi_pemesanans.Id_kos', $Id_kos)
            ->get();
        $Id_pemesanan = json_decode(json_encode($Id_pemesanan), true);

        // ambil semua datanya yang sama kosnya
        for ($i = 0; $i < $count; $i++) {
            // $datas_konfirmasi[] = konfirmasi_pemesanan::where([['Id_kos', '=', $data_indekosan], ['Id_pemesanan', $Id_pemesanan[$i]]])->get();
            $datas_konfirmasi[] = konfirmasi_pemesanan::where('Id_kos', '=', $Id_kos)->get();
        }

        // cek semua datanya
        for ($i = 0; $i < $count; $i++) {
            // kalau belum di konfir pemilik
            if ($Id_pemesanan[$i]['konfirmasi_pencarian_pemilik'] == 'Tidak') {
                // kalau jam batasya sudah habis
                if ($time_start >= $datas_konfirmasi[$i][0]->Jam_konfimasi_selesai) {
                    DB::table('pemesanans')->where('Id_pemesanan', $datas_konfirmasi[$i][0]->Id_pemesanan)->delete();
                    DB::table('konfirmasi_pemesanans')->where('Id_pemesanan', $datas_konfirmasi[$i][0]->Id_pemesanan)->delete();
                }
                // kalau jam batasya belum habis
                else {
                    $timeConfirmation = array(
                        "Konfirmasi_pencarian_pemilik" => "Ya",
                        // "Jam_pembayaran_mulai" => $time_start,
                        "Jam_konfimasi_selesai" => $time_finish
                    );
                    $update_data = konfirmasi_pemesanan::where('Id_pemesanan', '=', $data)->update($timeConfirmation);
                }

                // kalau sudah di konfir pemilik tapi pembayaran belum disetujui oleh pencari
                // pencari sudah menyetujui namun belum mengkonfirmasi pembayaran
            } elseif ($Id_pemesanan[$i]['konfirmasi_pembayaran_pencari'] == 'Ya') {
                // if ($Id_pemesanan[$i]['Jam_pembayaran_selesai'] != null) {
                if ($time_start >= $Id_pemesanan[$i]['Jam_pembayaran_selesai']) {
                    DB::table('pemesanans')->where('Id_pemesanan', $datas_konfirmasi[$i][0]->Id_pemesanan)->delete();
                    DB::table('konfirmasi_pemesanans')->where('Id_pemesanan', $datas_konfirmasi[$i][0]->Id_pemesanan)->delete();
                }
                // }
            }
        }

        // hitung ulang total datanya
        $count = DB::table('pemesanans')->where('Id_kos', '=', $Id_kos)->count();

        // kalau masih ada datanya
        if ($count > 0) {
            // perulangan untuk ambil semua datanya per tiap id pemesanan
            for ($i = 0; $i < $count; $i++) {

                // gabung data dari tabel pemesanan dan konfirmasi pemesanan
                $datas[] = DB::table('pemesanans')
                    // ->join('data_indekosans', 'pemesanans.Id_kos', '=', 'data_indekosans.Id_kos')
                    ->join('konfirmasi_pemesanans', 'pemesanans.Id_pemesanan', '=', 'konfirmasi_pemesanans.Id_pemesanan')
                    ->where([['pemesanans.Id_pemesanan', $Id_pemesanan[$i]['Id_pemesanan']], ['pemesanans.Id_kos', $Id_kos]])
                    ->get();
            }
            return view('Page.Page_Pemilik_Kos.pemesanan', [
                'datas' => $datas
            ]);
            // return dd($datas);
        }
        // kalau tidak ada datanya
        else {
            $datas = [];
            return view('Page.Page_Pemilik_Kos.pemesanan', [
                'datas' => $datas
            ]);
            // return dd($data);
        }
    }

    public function pemilikMenolak($data)
    {
        // $time_finish = new Carbon();
        // $time_finish->timezone('GMT+8');
        // $time_finish->addHours(1);
        // $time_finish = $time_finish->toDateTimeString();

        // $timeConfirmation = array(
        //     "Konfirmasi_pencarian_pemilik" => "Tolak",
        //     "Jam_pembayaran_selesai" => $time_finish
        // );

        // $update_data = konfirmasi_pemesanan::where('Id_pemesanan', '=', $data)->update($timeConfirmation);

        return view('Page.Page_Pemilik_Kos.Booking.alasan_penolakan', ['data' => $data]);
    }

    public function inputPemilikMenolak(Request $request, $data)
    {
        // Isi data feedback
        $validated = $request->validate([
            'Isi_feedback' => 'required'
        ]);

        $datas = DB::table('pemesanans')
            ->where('pemesanans.Id_pemesanan', $data)
            ->get();

        $values = array(
            "Id_pemesanan" => $datas[0]->Id_pemesanan,
            "Id_kos" => $datas[0]->Id_kos,
            "Jenis_feedback" => "Penolakan",
            "Isi_feedback" => $validated['Isi_feedback']
        );
        feedback::create($values);
        // Update data pemesanan
        $time_finish = new Carbon();
        $time_finish->timezone('GMT+8');
        $time_finish->addHours(1);
        $time_finish = $time_finish->toDateTimeString();

        $timeConfirmation = array(
            "Konfirmasi_pencarian_pemilik" => "Tolak",
            "Jam_pembayaran_selesai" => $time_finish
        );

        $update_data = konfirmasi_pemesanan::where('Id_pemesanan', '=', $data)->update($timeConfirmation);
        return redirect()->to('/pemilik-kos/data-pemesanan/' . $datas[0]->Id_kos);
    }

    public function pencariMenolak($data)
    {
        DB::table('pemesanans')->where('Id_pemesanan', $data)->delete();
        DB::table('konfirmasi_pemesanans')->where('Id_pemesanan', $data)->delete();
        return redirect()->to('/');
    }

    public function konfirmasiPembayaran($data)
    {
        $datas = DB::table('pemesanans')
            ->join('konfirmasi_pemesanans', 'pemesanans.Id_pemesanan', '=', 'konfirmasi_pemesanans.Id_pemesanan')
            ->where('pemesanans.Id_pemesanan', $data)
            ->get();
        return view('Page.Page_Pemilik_Kos.Booking.konfirmasi_pembayaran', ['datas' => $datas]);
    }

    // public function whatsappPencari($data)
    // {
    //     $datas = DB::table('users')
    //         // ->join('konfirmasi_pemesanans', 'pemesanans.Id_pemesanan', '=', 'konfirmasi_pemesanans.Id_pemesanan')
    //         ->where('users.UserId', $data)
    //         ->get();
    //     redirect("location:https://api.whatsapp.com/send?phone=085796274097&text=Hi");
    //     // return dd($datas);
    // }

    public function menerimaPembayaran($data)
    {
        // ambil userId pelanggan untuk digabungkan nantinya
        $datas = DB::table('pemesanans')
            ->where('Id_pemesanan', $data)
            ->get();

        $values = array(
            "Penghuni_Id" => $datas[0]->UserId,
            "Nama_penghuni" => $datas[0]->Nama,
            "Email_penghuni" => $datas[0]->Email,
            "No_telepon_penghuni" => $datas[0]->Nomor_telepon,
            "Id_kos" => $datas[0]->Id_kos,
            "Nama_indekos" => $datas[0]->Nama_kos,
        );
        penghuni_indekos::create($values);

        // update tabel konfirmasi_pemesanan
        $timeConfirmation = array(
            "Konfirmasi_pembayaran_pemilik" => "Ya",
            // "Jam_pembayaran_selesai" => $time_finish
        );

        $update_data = konfirmasi_pemesanan::where('Id_pemesanan', '=', $data)->update($timeConfirmation);

        DB::table('pemesanans')->where('Id_pemesanan', $data)->delete();
        DB::table('konfirmasi_pemesanans')->where('Id_pemesanan', $data)->delete();

        return redirect()->to('/pemilik-kos/data-pemesanan/' . $datas[0]->Id_kos);
        // return dd($values);
        // return view('Page.Page_Pemilik_Kos.Booking.konfirmasi_pembayaran', ['datas' => $datas]);
    }
}
