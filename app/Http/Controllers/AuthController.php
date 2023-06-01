<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function login() {
        return view('auth/login');
    }

    public function loginAkun(Request $request)
    {
        $credentials = $request->validate([
            'email'    => 'required | email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->isAdmin() || $user->isStaff()) {
                return redirect()->route('index'); // Ganti dengan rute yang sesuai untuk halaman admin/user
            } else {
                return redirect()->intended('/'); // Ganti dengan rute yang sesuai untuk halaman user
            }
        }

        return back()->with(['login' => 'Login gagal!']); // Ganti dengan tindakan yang sesuai jika login gagal
    }

    public function logout(Request $request) //untuk logout
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');   //diarahkan ke halaman utama
    }

    public function index() {
        $result = User::all();
        return view('index', compact('result'));
    }

    public function landing() {
         $products = Product::all();
         $categories = Category::all();
        return view('landing', compact(['products', 'categories']));
    }
}