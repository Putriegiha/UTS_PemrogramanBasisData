<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kartu_stoks', function (Blueprint $table) {
            $table->id('idkartu_stok')->increments();
            $table->char('jenis_transaksi',1);
            $table->integer('masuk');
            $table->Integer('keluar');
            $table->integer('stock');
            $table->timestamps();
            $table->integer('idtransaksi');
            $table->unsignedBigInteger('idbarang');
            $table->foreign('idbarang')->references('idbarang')->on('barangs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kartu_stoks');
    }
};
