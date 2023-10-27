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
        Schema::create('detail_penerimaans', function (Blueprint $table) {
            $table->id('iddetail_penerimaan')->increments();
            $table->integer('jumlah');
            $table->unsignedBigInteger('iddetail_pengadaan');
            $table->foreign('iddetail_pengadaan')->references('iddetail_pengadaan')->on('detail_pengadaans');
            $table->unsignedBigInteger('idpenerimaan');
            $table->foreign('idpenerimaan')->references('idpenerimaan')->on('penerimaans');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_penerimaans');
    }
};
