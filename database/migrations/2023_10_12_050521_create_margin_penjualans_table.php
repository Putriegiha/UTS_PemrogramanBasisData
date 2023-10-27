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
        Schema::create('margin_penjualans', function (Blueprint $table) {
            $table->id('idmargin_penjualan')->increments();
            $table->double('persen');
            $table->tinyInteger('status');
            $table->unsignedBigInteger('iduser');
            $table->foreign('iduser')->references('iduser')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('margin_penjualans');
    }
};