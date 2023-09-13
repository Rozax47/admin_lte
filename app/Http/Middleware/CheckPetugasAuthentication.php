<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckPetugasAuthentication
{
    public function handle(Request $request, Closure $next)
    {
        // Periksa apakah petugas telah login
        if (Auth::check()) {
            return $next($request);
        }
        

        // Jika belum login, redirect ke halaman login
        return redirect('/login')->with('loginError', 'Silakan login terlebih dahulu.');
    }
}

