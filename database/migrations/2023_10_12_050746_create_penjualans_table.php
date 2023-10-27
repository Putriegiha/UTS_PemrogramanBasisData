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
        Schema::create('penjualans', function (Blueprint $table) {
            $table->id('idpenjualan')->increments();
            $table->timestamps();
            $table->integer('subtotal_nilai');
            $table->Integer('ppn');
            $table->integer('total_nilai');
            $table->unsignedBigInteger('iduser');
            $table->foreign('iduser')->references('iduser')->on('users');
            $table->unsignedBigInteger('idmargin_penjualan');
            $table->foreign('idmargin_penjualan')->references('idmargin_penjualan')->on('margin_penjualans');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penjualans');
    }
};
