<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(){
        return view('auth.pages.login');
    }

    public function login_post(Request $request){
        $validateddata = $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

        $infoLogin = [
            'email'=>$request->input('email'),
            'password'=>$request->input('password'),
        ];



    $query = 'SELECT * from users join roles on roles.idrole = users.idrole where email = ?';
    $kondisi = [$infoLogin['email']];
    $validUser = DB::select($query,$kondisi);


    if ($validUser && Hash::check($infoLogin['password'], $validUser[0]->PASSWORD) && strtoupper( $validUser[0]->nama_role)=='ADMIN') {
        Auth::loginUsingId($validUser[0]->iduser); // Autentikasi pengguna
        $request->session()->regenerate();
        return redirect()->route('role.index')->with('success', 'Selamat Datang ADMIN!');
    } else {
        Auth::loginUsingId($validUser[0]->iduser); // Autentikasi pengguna
        $request->session()->regenerate();
        return redirect()->route('kasir.pages.MenuUtama.dashboard')->with('success', 'Selamat Datang Kasir!');
    }
}

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        if ($response = $this->loggedOut($request)) {
            return $response;
        }

        return $request->wantsJson()
            ? new JsonResponse([], 204)
            : redirect('/');
    }

    protected function loggedOut(Request $request)
    {
        //
    }
}