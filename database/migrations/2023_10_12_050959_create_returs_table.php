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
        Schema::create('returs', function (Blueprint $table) {
            $table->id('idretur')->increments();
            $table->timestamps();
            $table->unsignedBigInteger('idpenerimaan');
            $table->foreign('idpenerimaan')->references('idpenerimaan')->on('penerimaans');
            $table->unsignedBigInteger('iduser');
            $table->foreign('iduser')->references('iduser')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('returs');
    }
};