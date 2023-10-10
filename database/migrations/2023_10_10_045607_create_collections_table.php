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
        Schema::create('collections', function (Blueprint $table) {
             //penambahan kolom baru
             $table->id();
             $table->string('namaKoleksi', 100);
             $table->tinyInteger('jenisKoleksi')->comment('1: Buku, 2:Majalah, 3: Cakram Digital');
             $table->integer('jumlahKoleksi');
             $table->timestamps();
             //Krisnia Syahwadani 6706223087
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('collections');
    }
};
