<?php

namespace App\Http\Controllers;

use App\Models\Satuan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SatuanController extends Controller
{
    public function index()
    {
        $satuans = DB::table('satuans')
                    ->select('*')
                    ->where('status',1)
                    ->get();
        return view('admin.pages.satuan.tablesatuan', ['satuans'=>$satuans]);
    }

    public function trash()
    {
        $satuans = DB::table('satuans')
                    ->select('*')
                    ->where('status',0)
                    ->get();
        return view('admin.pages.satuan.trash',['satuans'=>$satuans]);
    }
    
    public function create()
    {
        return view('admin.pages.satuan.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_satuan' => 'required|max:45',
            'status' => 'required|numeric',
        ]);
        DB::table('satuans')->insert([
            'nama_satuan' => $request->input('nama_satuan'),
            'status' => $request->input('status'),
        ]);
            return redirect()->route('satuan.index')->with('success', 'Satuan berhasil ditambahkan!');
    }

    public function show($id)
    {
        $satuan = DB::table('satuans')->where('idsatuan',$id);
        return view('admin.pages.satuan.tablesatuan', compact('satuan'));
    }

    public function edit($id)
    {
        $satuan = DB::table('satuans')->where('idsatuan',$id)->first();
        return view('admin.pages.satuan.update',['satuan'=>$satuan]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama_satuan' => 'required|max:45',
            'status' => 'required|numeric',
        ]);
        $satuan = DB::table('satuans')->where('idsatuan',$id);
        $satuan->update([
            'nama_satuan' => $request->input('nama_satuan'),
            'status' => $request->input('status'),
        ]);
        return redirect()->route('satuan.index')->with('success', 'Satuan berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $satuan = DB::table('satuans')->where('idsatuan',$id);
        $satuan->update(['status'=>0]);
        return redirect()->route('satuan.index')->with('success', 'Satuan berhasil dihapus!');
    }

    public function restore($id)
    {
        $satuan = DB::table('satuans')->where('idsatuan',$id);
        $satuan->update(['status'=>1]);
        return redirect()->route('satuan.index')->with('success', 'Satuan berhasil dipulihkan!');
    }
}