<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class VendorController extends Controller
{
    public function index()
    {
        $vendors = DB::table('vendors')
                    ->select('*')
                    ->where('status',1)
                    ->get();
        return view('pages.vendorPBD.tablevendor', ['vendors'=>$vendors]);
    }

    public function trash()
    {
        $vendors = DB::table('vendors')
                    ->select('*')
                    ->where('status',0)
                    ->get();
        return view('pages.vendorPBD.trash',['vendors'=>$vendors]);
    }

    public function create()
    {
        return view('pages.vendorPBD.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_vendor' => 'required|max:100',
            'badan_hukum' => 'required|max:1',
            'status' => 'required|max:1',
        ]);
        DB::table('vendors')->insert([
            'nama_vendor' => $request->input('nama_vendor'),
            'badan_hukum' => $request->input('badan_hukum'),
            'status' => $request->input('status'),
        ]);
        return redirect()->route('vendor.index')->with('success', 'Vendor berhasil ditambahkan!');
    }

    public function show($id)
    {
        $vendor = DB::table('vendors')->where('idvendor',$id);
        return view('pages.vendorPBD.tablevendor', compact('vendor'));
    }

    public function edit($id)
    {
        $vendor = DB::table('vendors')->where('idvendor',$id)->first();
        return view('pages.vendorPBD.update',['vendor'=>$vendor]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama_vendor' => 'required|max:100',
            'badan_hukum' => 'required|max:1',
            'status' => 'required|max:1',
        ]);
        $vendor = DB::table('vendors')->where('idvendor',$id);
        $vendor->update([
            'nama_vendor' => $request->input('nama_vendor'),
            'badan_hukum' => $request->input('badan_hukum'),
            'status' => $request->input('status'),
        ]);
        return redirect()->route('vendor.index')->with('success', 'Vendor berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $vendor = DB::table('vendors')->where('idvendor',$id);
        $vendor->update(['status'=>0]);
        return redirect()->route('vendor.index')->with('success', 'Vendor berhasil dihapus!');
    }

    public function restore($id)
    {
        $vendor = DB::table('vendors')->where('idvendor',$id);
        $vendor->update(['status'=>1]);
        return redirect()->route('vendor.index')->with('success', 'Vendor berhasil dipulihkan!');
    }
}