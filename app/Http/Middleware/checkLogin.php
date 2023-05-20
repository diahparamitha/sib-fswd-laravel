<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckLogin
{
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            // User sudah login, lanjutkan ke halaman yang diminta
            return $next($request);
        }

        // User belum login, redirect ke halaman login atau tampilkan pesan kesalahan
        return redirect()->route('login')->with('error', 'Anda harus login untuk mengakses halaman ini.');
    }
}
