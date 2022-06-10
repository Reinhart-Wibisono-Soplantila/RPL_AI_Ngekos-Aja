<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use phpDocumentor\Reflection\Types\Null_;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class PencariKosController extends Controller
{
    public function index()
    {
        $count = DB::table('data_indekosans')->count();

        if ($count > 0) {
            $Id_kos = DB::table('data_indekosans')
                ->select('Id_kos')
                ->get();
            $Id_kos = json_decode(json_encode($Id_kos), true);
            for ($i = 0; $i < $count; $i++) {
                $datas[] = DB::table('data_indekosans')
                    // ->join('data_indekosans', 'users.Id_kos', '=', 'data_indekosans.Id_kos')
                    ->join('gambar_indekosans', 'data_indekosans.Id_kos', '=', 'gambar_indekosans.Id_kos')
                    ->join('aturan_fasilitas_indekosans', 'gambar_indekosans.Id_kos', '=', 'aturan_fasilitas_indekosans.Id_kos')
                    ->join('info_sewas', 'aturan_fasilitas_indekosans.Id_kos', '=', 'info_sewas.Id_kos')
                    ->where('data_indekosans.Id_kos', $Id_kos[$i])
                    ->get();
            }

            return view('Page.Page_Pencari_Kos.homepage_pencarikost', [
                'datas' => $datas
            ]);

            // return dd($datas);
        } else {
            $datas[] = [];

            return view('Page.Page_Pencari_Kos.homepage_pencarikost', [
                'datas' => $datas
            ]);
        }
    }

    public function show($data_indekosan)
    {
        $UserId = DB::table('data_indekosans')
            ->select('UserId')
            ->where('data_indekosans.Id_kos', $data_indekosan)
            ->get();

        $UserId = json_decode(json_encode($UserId), true);
        $datas = DB::table('data_indekosans')
            // ->join('data_indekosans', 'users.Id_kos', '=', 'data_indekosans.Id_kos')
            ->join('users', 'users.UserId', '=', 'data_indekosans.UserId')
            ->join('gambar_indekosans', 'data_indekosans.Id_kos', '=', 'gambar_indekosans.Id_kos')
            ->join('aturan_fasilitas_indekosans', 'gambar_indekosans.Id_kos', '=', 'aturan_fasilitas_indekosans.Id_kos')
            ->join('info_sewas', 'aturan_fasilitas_indekosans.Id_kos', '=', 'info_sewas.Id_kos')
            ->where([['data_indekosans.Id_kos', $data_indekosan], ['data_indekosans.UserId', $UserId]])
            ->get();

        return view('Page.Page_Pencari_Kos.detailpage_pencarikost', [
            'datas' => $datas
        ]);
        // return dd($datas);
    }

    public function list()
    {
        $count = DB::table('data_indekosans')->count();
        if ($count > 0) {
            $Id_kos = DB::table('data_indekosans')
                ->select('Id_kos')
                ->get();
            $Id_kos = json_decode(json_encode($Id_kos), true);
            for ($i = 0; $i < $count; $i++) {
                $datas[] = DB::table('data_indekosans')
                    // ->join('data_indekosans', 'users.Id_kos', '=', 'data_indekosans.Id_kos')
                    ->join('gambar_indekosans', 'data_indekosans.Id_kos', '=', 'gambar_indekosans.Id_kos')
                    ->join('aturan_fasilitas_indekosans', 'gambar_indekosans.Id_kos', '=', 'aturan_fasilitas_indekosans.Id_kos')
                    ->join('info_sewas', 'aturan_fasilitas_indekosans.Id_kos', '=', 'info_sewas.Id_kos')
                    ->where('data_indekosans.Id_kos', $Id_kos[$i])
                    ->paginate(9);
            }
            return view('Page.Page_Pencari_Kos.list_kos', [
                'datas' => $datas
            ]);
        } else {
            $datas[] = [];
            return view('Page.Page_Pencari_Kos.list_kos', [
                'datas' => $datas
            ]);
        }

        // return view('Page.Page_Pencari_Kos.list_kos');
    }

    public function filter(Request $request)
    {

        $count = DB::table('data_indekosans')->where('Gender_kamar', $request->Gender_kamar)->count();
        $Id_kos = DB::table('data_indekosans')
            ->select('Id_kos')
            ->where('Gender_kamar', $request->Gender_kamar)
            ->get();
        $Id_kos = json_decode(json_encode($Id_kos), true);
        for ($i = 0; $i < $count; $i++) {
            $datas[] = DB::table('data_indekosans')
                // ->join('data_indekosans', 'users.Id_kos', '=', 'data_indekosans.Id_kos')
                ->join('gambar_indekosans', 'data_indekosans.Id_kos', '=', 'gambar_indekosans.Id_kos')
                ->join('aturan_fasilitas_indekosans', 'gambar_indekosans.Id_kos', '=', 'aturan_fasilitas_indekosans.Id_kos')
                ->join('info_sewas', 'aturan_fasilitas_indekosans.Id_kos', '=', 'info_sewas.Id_kos')
                ->where('data_indekosans.Id_kos', $Id_kos[$i])
                ->get();
        }
        return view('Page.Page_Pencari_Kos.list_kos', [
            'datas' => $datas
        ]);
        // return dd($Id_kos);
    }

    public function profile()
    {
        return view('Page.Page_Pencari_Kos.Profile.index');
    }

    public function editProfile($data)
    {
        $datas = DB::table('users')
            ->select('*')
            ->where('users.UserId', $data)
            ->get();

        // $datas[0][password] = $datas[0][password]
        // return dd($datas);
        return view('Page.Page_Pencari_Kos.Profile.edit', [
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
        return view('Page.Page_Pencari_Kos.Profile.index');
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
