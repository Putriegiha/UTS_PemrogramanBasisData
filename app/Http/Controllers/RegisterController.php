<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User; // Pastikan Anda menggunakan model User yang sesuai

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('pages.auth.register');
    }

    public function register(Request $request)
    {
        // Lakukan validasi data yang dikirim
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'username' => 'required|unique:users',
            'password' => 'required|min:6',
            'terms' => 'accepted',
        ]);

        // Simpan data pengguna ke dalam database
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'username' => $validatedData['username'],
            'password' => bcrypt($validatedData['password']),
        ]);

        // Tambahkan logika untuk login setelah registrasi (opsional)

        // Redirect ke halaman yang diinginkan setelah registrasi berhasil
        return redirect('/login')->with('success', 'Account created successfully! Please log in.');
    }
}
