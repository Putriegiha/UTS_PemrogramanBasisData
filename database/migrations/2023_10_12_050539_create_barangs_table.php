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
        Schema::create('barangs', function (Blueprint $table) {
            $table->id('idbarang')->increments();
            $table->char('jenis',1);
            $table->string('nama',45);
            $table->tinyInteger('status');
            $table->integer('harga');
            $table->unsignedBigInteger('idsatuan');
            $table->foreign('idsatuan')->references('idsatuan')->on('satuans');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangs');
    }
};
