<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class UserController extends Controller
{
    protected function redirectTo()
    {
        if (Auth()->user()->peran == 'pemilik kos') {
            return route('/pemilik-kos/homepage');
        } elseif (Auth()->user()->peran == 'pencari kos') {
            return redirect()->to('/');
            // route('/pencari-kos/homepage');
        }
    }

    public function IndexLogin()
    {
        return view('Page.Login_Page.login');
    }

    public function Authenticate(Request $request)
    {
        $validated = $request->validate([
            'password' => 'required',
            'email' => 'email|required',
        ]);

        // if (Auth::attempt($validated)) {
        //     $request->session()->regenerate();
        //     return redirect()->intended(config('admin.prefix'));
        //     // return redirect()->intended('/homepage/pemilik-kos');
        // }
        if (Auth::attempt($validated)) {
            if (Auth()->user()->peran == 'pemilik kos') {
                $request->session()->regenerate();
                return redirect()->intended('/pemilik-kos/homepage');
            } elseif (Auth()->user()->peran == 'pencari kos') {
                $request->session()->regenerate();
                return redirect()->intended('/');
            }
        } else {
            return back()->with('LoginError', 'Login Gagal!');
        }
    }

    public function Logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        // return redirect('/login');
        return redirect()->intended('/');
    }

    public function IndexSignUp()
    {
        return view('Page.Login_Page.sign_up');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|max:255',
            'no_telepon' => 'required',
            'password' => 'required|min:3|max:20',
            'email' => 'email:dns|required|unique:users',
            'peran' => 'required'
        ]);

        $validated['password'] = Hash::make($validated['password']);
        $UserId = explode(' ', $validated['nama']);
        if (sizeof($UserId) > 1) {
            $UserId = $UserId[0] . $UserId[sizeof($UserId) - 1] . Str::random(20);
        } else {
            $UserId = $UserId[0] . Str::random(20);
        }
        $values = array(
            'UserId' => $UserId,
            'nama' => $validated['nama'],
            'no_telepon' => $validated['no_telepon'],
            'password' => $validated['password'],
            'email' => $validated['email'],
            'peran' => $validated['peran']
        );
        // User::create($validated);
        User::insert($values);

        return redirect('/login')->with('status', 'Pendaftaran Berhasil Dilakukan!');
    }

    public function verification()
    {
        return view('Page.Login_Page.verification_account');
    }

    public function IndexForgotPassword()
    {
        return view('Page.Login_Page.forgot_password');
    }

    public function IndexCheckEmail()
    {
        return view('Page.Login_Page.check_email');
    }

    public function IndexChangePassword()
    {
        return view('Page.Login_Page.change_pass');
    }

    public function IndexSuccessChangePassword()
    {
        return view('Page.Login_Page.success_change_pass');
    }
}
