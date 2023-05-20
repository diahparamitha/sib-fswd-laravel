<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function login() {
        return view('auth/login');
    }

    public function loginAkun(Request $request)
    {
        $auth = $request->validate([
            'email'     => 'required | email',
            'password'  => 'required',
        ]);

        if (Auth::attempt($auth)) {  //Jika data yang diinput sesuai
            $request->session()->regenerate();
            return redirect()->intended('/'); //diarahkan ke halaman index
        }
        return back()->with('login', 'login gagal!'); //gagal login balik ke halaman login lagi dan tampilkan pesan kesalahan
    }

    public function logout(Request $request) //untuk logout
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');   //diarahkan ke halaman utama
    }

    public function index() {
        $result = User::all();
        return view('index', compact('result'));
    }
}