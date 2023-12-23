<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    public function index()
    {
        $roles = DB::table('roles')
                    ->select('*')
                    ->where('status',1)
                    ->get();
        return view('admin.pages.role.tablerole',['roles'=>$roles]);
    }

    public function trash()
    {
        $roles = DB::table('roles')
                    ->select('*')
                    ->where('status',0)
                    ->get();
        return view('admin.pages.role.trash',['roles'=>$roles]);
    }
    
    public function create()
    {
        return view('admin.pages.role.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_role' => 'required|max:100',
            'status' => 'required|numeric',
        ]);
        DB::table('roles')->insert([
            'nama_role' => $request->input('nama_role'),
            'status' => $request->input('status'),
        ]);
        return redirect()->route('role.index')->with('success', 'Role berhasil ditambahkan!');
    }

    public function show($id)
    {
        $role = DB::table('roles')->where('idrole',$id);
        return view('admin.pages.role.tablerole', compact('role'));
    }
    
    public function edit($id)
    {
        $role = DB::table('roles')->where('idrole',$id)->first();
        return view('admin.pages.role.update',['role'=>$role]);
    }
    
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama_role' => 'required|max:100',
            'status' => 'required|numeric',
        ]);
        $role = DB::table('roles')->where('idrole',$id);
        $role->update([
            'nama_role' => $request->input('nama_role'),
            'status' => $request->input('status'),
        ]);
        return redirect()->route('role.index')->with('success', 'Role berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $role = DB::table('roles')->where('idrole',$id);
        $role->update(['status'=>0]);
        return redirect()->route('role.index')->with('success', 'Role berhasil dihapus!');
    }

    public function restore($id)
    {
        $role = DB::table('roles')->where('idrole',$id);
        $role->update(['status'=>1]);
        return redirect()->route('role.index')->with('success', 'Role berhasil dipulihkan!');
    }
}