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
        Schema::create('pengadaans', function (Blueprint $table) {
            $table->id('idpengadaan')->increments();
            $table->timestamps();
            $table->char('status',1);
            $table->Integer('subtotal_nilai');
            $table->integer('ppn');
            $table->integer('total_nilai');
            $table->unsignedBigInteger('iduser');
            $table->foreign('iduser')->references('iduser')->on('users');
            $table->unsignedBigInteger('idvendor');
            $table->foreign('idvendor')->references('idvendor')->on('vendors');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengadaans');
    }
};
