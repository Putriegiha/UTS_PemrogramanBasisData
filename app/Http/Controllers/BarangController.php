<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Satuan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBarangRequest;
use App\Http\Requests\UpdateBarangRequest;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{

    public function index()
    {
        
        $barangs = DB::table('barangs')
                    ->select('*')
                    ->where('status',1)
                    ->get();
        return view('admin.pages.barang.tablebarang',['barangs'=>$barangs]);
    }

    public function trash()
    {
        $barangs = DB::table('barangs')
                    ->select('*')
                    ->where('status',0)
                    ->get();
        return view('admin.pages.barang.trash',['barangs'=>$barangs]);
    }

    public function create()
    {
        return view('admin.pages.barang.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'jenis' => 'required|max:1',
            'nama' => 'required|max:45',
            'status' => 'required|numeric',
            'harga' => 'required|numeric',
            'idsatuan' => 'required|exists:satuans,idsatuan',
        ]);
        DB::table('barangs')->insert([
            'jenis' => $request->input('jenis'),
            'nama' => $request->input('nama'),
            'status' => $request->input('status'),
            'harga' => $request->input('harga'),
            'idsatuan' => $request->input('idsatuan'),
        ]);
        return redirect()->route('barang.index')->with('success', 'Barang berhasil ditambahkan!');
    }

    public function show($id)
    {
        $barang = DB::table('barangs')->where('idbarang',$id);
        return view('admin.pages.barang.tablebarang', compact('barang'));
    }
    
    public function edit($id)
    {
        $barang = DB::table('barangs')->where('idbarang',$id)->first();
        return view('admin.pages.barang.update',['barang'=>$barang]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'jenis' => 'required|max:1',
            'nama' => 'required|max:45',
            'status' => 'required|numeric',
            'harga' => 'required|numeric',
            'idsatuan' => 'required|exists:satuans,idsatuan',
        ]);
        $barang = DB::table('barangs')->where('idbarang',$id);
        $barang->update([
            'jenis' => $request->input('jenis'),
            'nama' => $request->input('nama'),
            'status' => $request->input('status'),
            'harga' => $request->input('harga'),
            'idsatuan' => $request->input('idsatuan'),
        ]);
        return redirect()->route('barang.index')->with('success', 'Barang berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $barang = DB::table('barangs')->where('idbarang',$id);
        $barang->update(['status'=>0]);
        return redirect()->route('barang.index')->with('success', 'Barang berhasil dihapus!');
    }

    public function restore($id)
    {
        $barang = DB::table('barangs')->where('idbarang',$id);
        $barang->update(['status'=>1]);
        return redirect()->route('barang.index')->with('success', 'Barang berhasil dipulihkan!');
    }
}