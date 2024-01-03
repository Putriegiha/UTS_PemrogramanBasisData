<?php

namespace App\Http\Controllers;

use App\Models\Pengadaan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PengadaanController extends Controller
{
    public function index()
    {
        $detail_pengadaans = DB::table('view_pengadaan_info')->get();
        $barangs = DB::table('barangs')->get();
        $vendors = DB::table('vendors')->get();
        return view('admin.pages.pengadaan.tabelpengadaan', [
            'detail_pengadaans' => $detail_pengadaans,
            'barangs' => $barangs,
            'vendors' => $vendors,
        ]);
    }

    public function create(Request $request)
    {
        $idpengadaan = DB::table('pengadaans')->insertGetId([
            'TIMESTAMP' => now(),
            'users_iduser' => $request->input('users_iduser'),
            'vendors_idvendor' => $request->input('vendors_idvendor'),
            'subtotal_nilai' => $request->input('sub_total'),
            'ppn' => $request->input('ppn'),
            'total_nilai' => $request->input('total_nilai'),
            'STATUS' => 0,
        ]);

        DB::table('detail_pengadaans')->insert([
            'harga_satuan' => $request->input('harga_satuan'),
            'jumlah' => $request->input('jumlah'),
            'sub_total' => $request->input('sub_total'),
            'idbarang' => $request->input('idbarang'),
            'idpengadaan' => $idpengadaan,
        ]);

        return response()->json(['success' => true]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePengadaanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pengadaan $pengadaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengadaan $pengadaan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePengadaanRequest $request, Pengadaan $pengadaan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengadaan $pengadaan)
    {
        //
    }
}
