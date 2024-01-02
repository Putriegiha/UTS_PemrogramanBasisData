<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function register(){
        return view('auth.pages.register');
    }

    public function register_post(Request $request){

        $validatedData = $request->validate([
            'username'=>'required|string',
            'email'=>'required|unique:users,email',
            'password'=>'required|confirmed',

        ],
    [
        'username.required'=>'Silahkan mengisi Username Anda !',
        'email.required'=>'Silahkan mengisi Email Anda !',
        'email.unique'=>'Email Sudah Ada !',
        'password.required'=>'Silahkan mengisi Password Anda !',
        'password.confirmed'=>'Password Tidak Sama !'
    ]);

        // $role = DB::table('role')->select('id_role')->where('nama_role','admin')->first();
        $users = DB::table('users')->count();
        if($users>=1){
            $query = 'SELECT idrole From roles WHERE upper(nama_role) LIKE upper(?)';
            $kondisi = ['users'];
            $roles = DB::select($query,$kondisi);
            $data = [
                'idrole'=> $roles[0]->idrole,
                'username'=> $request->input('username'),
                'email'=> $request->input('email'),
                'password'=>bcrypt($request->input('password')),

            ];
        }
        else{
            $query = 'SELECT idrole From roles WHERE upper(nama_role) LIKE upper(?)';
            $kondisi = ['admin'];
            $roles = DB::select($query,$kondisi);
            $data = [
                'idrole'=> $roles[0]->idrole,
                'username'=> $request->input('username'),
                'email'=> $request->input('email'),
                'password'=>bcrypt($request->input('password')),

            ];
        };


    //    $tes= DB::table('user')->insert($data);

    $query =  ' INSERT INTO users(idrole,username,email,password) VALUES (?,?,?,?)';
    $values = [$data['idrole'],$data['username'],$data['email'],$data['password']];
    $sql = DB::insert($query,$values);
      if($sql){
        return redirect()->route('login')->with('success','Berhasil !');
      }

    }

}
