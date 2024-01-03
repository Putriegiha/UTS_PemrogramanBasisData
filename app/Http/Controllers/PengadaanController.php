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
        $detail_pengadaans = DB::select("SELECT * FROM view_pengadaan_info");
        // $detail_pengadaans = DB::table('detail_pengadaans')->get();
        $barangs = DB::table('barangs')->get();
        $vendors = DB::table('vendors')->get();
        $users = DB::table('users')->get();
        return view('admin.pages.pengadaan.tabelpengadaan', [
            'detail_pengadaans' => $detail_pengadaans,
            'barangs' => $barangs,
            'vendors' => $vendors,
            'users' => $users,
        ]);
    }

    public function create(Request $request)
    {
        $idpengadaan = DB::table('pengadaans')->insertGetId([
            'TIMESTAMP' => now(),
            'iduser' => $request->input('users_iduser'),
            'idvendor' => $request->input('vendors_idvendor'),
            'subtotal_nilai' => $request->input('subtotal_nilai'),
            'ppn' => $request->input('ppn'),
            'total_nilai' => $request->input('total_nilai'),
            'STATUS' => 0,
        ]);

        $barang = $request->input('barang');

        $hargasatuan = DB::select("SELECT harga FROM barangs WHERE idbarang = $barang");

        $hargasatuan = $hargasatuan[0]->harga;

        $subtotal = $request->input('jumlah_pengadaan') * $hargasatuan;

        $totalnilai = DB::select("SELECT calculate_ppn($subtotal) AS Subtotal");
        $totalnilai = $totalnilai[0]->Subtotal;

        $query = 'INSERT INTO detail_pengadaans(harga_satuan,jumlah,sub_total,idbarang,idpengadaan) VALUES (?,?,?,?,?)';
        $values = [$hargasatuan, $request->input('jumlah_pengadaan'), $subtotal, $barang, $idpengadaan];
        $sql = DB::insert($query, $values);

        $detail_pengadaans = DB::select("SELECT * FROM view_pengadaan_info");

        return redirect()->back();
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