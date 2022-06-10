<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\aturan_fasilitas_indekosan;
use App\Models\gambar_indekosan;
use App\Models\data_indekosan;

class RegisIndekosanController extends Controller
{
    public function index()
    {
        return view('Page.livewire.multi-step-form');
    }

    public function poststepone(Request $request)
    {
        $$vaidatedData = $request->validate([
            'Nama_indekos' => 'required|max:255',
            'Deskripsi_indekos' => 'required',
            'Tipe_kamar' => 'max:20',
            'Gender_kamar' => 'required',
            'Peraturan' => 'required',
            'Peraturan_lain' => 'required',
            'Catatan_tambahan' => 'min:10'
        ]);

        if (empty($request->session()->get('datas'))) {
            $data_indekosan = new data_indekosan();
            $data_indekosan->fill($validatedData);
            $data_indekosan->session()->put('data_indekosan', $data_indekosan);
        } else {
            $data_indekosan = $request->session()->get('data_indekosan');
            $data_indekosan->fill($validatedData);
            $data_indekosan->session()->put('data_indekosan', $data_indekosan);
        }

        return redirect('/pendaftaran-indekos/langkah-dua');
    }

    public function indexsteptwo(Request $request)
    {
        $data_indekosan = $request->session()->get('data_indekosan');
        dd($data_indekosan);

        // return view('Page.Page_Pemilik_Kos.Daftar_Page.daftar_alamat_kos', compact('data_indekosan', $data_indekosan));
    }
}
