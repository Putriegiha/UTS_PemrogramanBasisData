<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $users = DB::table('users')
                ->select('*')
                ->where('status',1)
                ->get();
        return view('pages.user.tableuser', ['users'=>$users]);
    }

    public function trash()
    {
        $users = DB::table('users')
                    ->select('*')
                    ->where('status',0)
                    ->get();
        return view('pages.user.trash',['users'=>$users]);
    }

    public function create()
    {
        return view('pages.user.create');
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|max:45',
            'password' => 'required|max:100',
            'status' => 'required|numeric',
            'idrole' => 'required|exists:roles,idrole',
        ]);
        DB::table('users')->insert([
            'username' => $request->input('username'),
            'password' => bcrypt($request->input('password')),
            'status' => $request->input('status'),
            'idrole' => $request->input('idrole'),
        ]);
            return redirect()->route('user.index')->with('success', 'User berhasil ditambahkan!');
    }
    
    public function show($id)
    {
        $user = DB::table('users')->where('iduser',$id);
        return view('pages.user.tableuser', compact('user'));
    }

    public function edit($id)
    {
        $user = DB::table('users')->where('iduser',$id)->first();
        return view('pages.user.update',['user'=>$user]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'username' => 'required|max:45',
            'password' => 'required|max:100',
            'status' => 'required|numeric',
            'idrole' => 'required|exists:roles,idrole',
        ]);
        $user = DB::table('users')->where('iduser',$id);
        $user->update([
            'username' => $request->input('username'),
            'password' => bcrypt($request->input('password')),
            'status' => $request->input('status'),
            'idrole' => $request->input('idrole'),
        ]);
        return redirect()->route('user.index')->with('success', 'User berhasil diperbarui!');
    }
    
    public function destroy($id)
    {
        $user = DB::table('users')->where('iduser',$id);
        $user->update(['status'=>0]);
        return redirect()->route('user.index')->with('success', 'User berhasil dihapus!');
    }

    public function restore($id)
    {
        $user = DB::table('users')->where('iduser',$id);
        $user->update(['status'=>1]);
        return redirect()->route('user.index')->with('success', 'User berhasil dipulihkan!');
    }
}    