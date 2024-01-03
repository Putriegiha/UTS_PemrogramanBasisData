<?php

namespace App\Http\Controllers;

use App\Models\Penerimaan;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePenerimaanRequest;
use App\Http\Requests\UpdatePenerimaanRequest;
use Illuminate\Support\Facades\DB;

class PenerimaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // // Mengambil data dari view_pengadaan_info, barangs, dan vendors
        // $idpenerimaan = DB::table('penerimaans')->get();
        // $created_at = DB::table('barangs')->get();
        // $STATUS = DB::table('vendors')->get();
        // $iduser = DB::table('view_pengadaan_info')->get();
        // $idpengadaan = DB::table('view_pengadaan_info')->get();

        // // Mengirim data ke view 'tabelpengadaan'
        // return view('admin.pages.pengadaan.tabelpengadaan', [
        //     'detail_pengadaans' => $detail_pengadaans,
        //     'barangs' => $barangs,
        //     'vendors' => $vendors,
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePenerimaanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Penerimaan $penerimaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Penerimaan $penerimaan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePenerimaanRequest $request, Penerimaan $penerimaan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Penerimaan $penerimaan)
    {
        //
    }
}
