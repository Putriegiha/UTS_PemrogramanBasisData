<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('pages.auth.register');
    }

    public function login(Request $request)
    {
        // Lakukan validasi data yang dikirim
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Lakukan autentikasi pengguna
        if (Auth::attempt($credentials)) {
            // Jika autentikasi berhasil, arahkan pengguna ke halaman tertentu
            return redirect()->intended('/dashboard');
        } else {
            // Jika autentikasi gagal, arahkan kembali ke halaman login dengan pesan error
            return back()->withErrors(['username' => 'Username or password is incorrect.']);
        }
    }
}
