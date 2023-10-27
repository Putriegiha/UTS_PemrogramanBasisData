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
        Schema::create('detail_returs', function (Blueprint $table) {
            $table->id('iddetail_retur')->increments();
            $table->integer('jumlah');
            $table->string('alasan',200);
            $table->unsignedBigInteger('idretur');
            $table->foreign('idretur')->references('idretur')->on('returs');
            $table->unsignedBigInteger('iddetail_penerimaan');
            $table->foreign('iddetail_penerimaan')->references('iddetail_penerimaan')->on('detail_penerimaans');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_returs');
    }
};
