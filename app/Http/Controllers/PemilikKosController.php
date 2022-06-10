<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\data_indekosan;
use App\Models\pemesanan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use function Spatie\Ignition\ErrorPage\jsonEncode;

class PemilikKosController extends Controller
{
    public function index()
    {
        $count = DB::table('data_indekosans')->where('data_indekosans.UserId', auth()->user()->UserId)->count();

        if ($count > 0) {
            $Id_kos = DB::table('data_indekosans')
                ->select('Id_kos')
                ->where('data_indekosans.UserId', auth()->user()->UserId)
                ->get();
            $Id_kos = json_decode(json_encode($Id_kos), true);

            for ($i = 0; $i < sizeof($Id_kos); $i++) {
                $datas[] = DB::table('data_indekosans')
                    ->join('gambar_indekosans', 'data_indekosans.Id_kos', '=', 'gambar_indekosans.Id_kos')
                    ->where('data_indekosans.Id_kos', $Id_kos[$i])
                    ->get();
            }
            return view('Page.Page_Pemilik_Kos.homepage_pemilikkost', [
                'datas' => $datas
            ]);
        } else {
            $datas[] = [];
            return view('Page.Page_Pemilik_Kos.homepage_pemilikkost', [
                'datas' => $datas
            ]);
        }
        // return dd($datas);

        // } else {
        //     return view('Page.Page_Pemilik_Kos.homepage_pemilikkost');
        // }

        // return dd($Id_kos);
    }

    public function showDataKos($data_indekosan)
    {
        $count = DB::table('penghuni_indekos')->where('Id_kos', $data_indekosan)->count();

        if ($count > 0) {
            $datas = DB::table('penghuni_indekos')
                ->where('penghuni_indekos.Id_kos', $data_indekosan)
                ->get();

            // for ($i = 0; $i < sizeof($datas); $i++) {
            //     $datas[] = DB::table('data_indekosans')
            //         ->join('gambar_indekosans', 'data_indekosans.Id_kos', '=', 'gambar_indekosans.Id_kos')
            //         ->where('data_indekosans.Id_kos', $Id_kos[$i])
            //         ->get();
            // }
            return view('Page.Page_Pemilik_Kos.editdatakos', [
                'datas' => $datas
            ]);
            // return dd($datas);
        } else {
            // $datas = DB::table('data_indekosans')
            //     ->where('data_indekosans.Id_kos', $data_indekosan)
            //     ->get();
            $datas[] = (object) [
                'Nama_penghuni' => '-',
                'No_telepon_penghuni' => '-',
                'Email_penghuni' => '-',
                'Penghuni_Id' => '-',
                'Id_kos' => $data_indekosan
            ];
            return view('Page.Page_Pemilik_Kos.editdatakos', [
                'datas' => $datas
            ]);
        }

        // $datas = DB::table('data_indekosans')
        //     ->where('data_indekosans.Id_kos', $data_indekosan)
        //     ->get();
        // return view('Page.Page_Pemilik_Kos.editdatakos', [
        //     'datas' => $datas
        // ]);
        // return dd($datas);
    }

    public function hapusPenghuni($data)
    {
        DB::table('penghuni_indekos')->where('Penghuni_Id', $data)->delete();
        return redirect()->to('/pemilik-kos/homepage');
    }

    public function deleteDataKos($data_indekosan)
    {
        DB::table('info_sewas')->where('Id_kos', $data_indekosan)->delete();
        DB::table('aturan_fasilitas_indekosans')->where('Id_kos', $data_indekosan)->delete();
        DB::table('gambar_indekosans')->where('Id_kos', $data_indekosan)->delete();
        DB::table('data_indekosans')->where('Id_kos', $data_indekosan)->delete();

        return redirect()->intended('/pemilik-kos/homepage');
    }
    public function show($data_indekosan)
    {
        $datas = DB::table('data_indekosans')
            // ->join('data_indekosans', 'users.Id_kos', '=', 'data_indekosans.Id_kos')
            ->join('gambar_indekosans', 'data_indekosans.Id_kos', '=', 'gambar_indekosans.Id_kos')
            ->join('aturan_fasilitas_indekosans', 'gambar_indekosans.Id_kos', '=', 'aturan_fasilitas_indekosans.Id_kos')
            ->join('info_sewas', 'aturan_fasilitas_indekosans.Id_kos', '=', 'info_sewas.Id_kos')
            ->where('data_indekosans.Id_kos', $data_indekosan)
            ->get();

        return view('Page.Page_Pemilik_Kos.detailpage_pemilikkost', [
            'datas' => $datas
        ]);
        // return dd($datas[0]->Foto_tampak_depan);
        // $data = json_decode($datas[0]->Fasilitas_umum);
        // return dd($data);
    }

    public function profile()
    {
        return view('Page.Page_Pemilik_Kos.Profile.index');
    }

    public function editProfile($data)
    {
        $datas = DB::table('users')
            ->select('*')
            ->where('users.UserId', $data)
            ->get();

        // $datas[0][password] = $datas[0][password]
        // return dd($datas);
        return view('Page.Page_Pemilik_Kos.Profile.edit', [
            'data' => $datas
        ]);
    }

    public function updateProfile(Request $request, User $user)
    {
        if ($request['password'] == Null) {
            $validatedData = $request->validate([
                'nama' => 'max:255',
                'email' => 'email:dns|unique:users,email,' . auth()->id(),
                // 'password' => 'min:3|max:20|confirmed',
                'gambar' => 'image|file|mimes:png,jpg,jpeg,svg|max:1024',
                'no_telepon' => 'max:16',
            ]);
        } else {
            $validatedData = $request->validate([
                'nama' => 'max:255',
                'email' => 'email:dns|unique:users,email,' . auth()->id(),
                'password' => 'min:3|max:20|confirmed',
                'gambar' => 'image|file|mimes:png,jpg,jpeg,svg|max:1024',
                'no_telepon' => 'max:16',
            ]);

            $validatedData['password'] = Hash::make($validatedData['password']);
        }

        // return dd($validatedData);
        if ($request->file('gambar')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['gambar'] = $request->file('gambar')->store('post-images-user', 'public');
            // return $request->file('gambar_artikel')->store('images');
        }
        // return dd($validatedData);
        User::where('UserId', auth()->user()->UserId)
            ->update($validatedData);
        return view('Page.Page_Pemilik_Kos.Profile.index');
    }

    public function destroyProfile(Request $request, $user)
    {
        DB::table('users')->where('UserId', $user)->delete();
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        // return redirect('/login');
        return redirect()->intended('/');
        // return view('Page.Page_Pencari_Kos.Profile.index');
        // return dd($request);
    }
}
