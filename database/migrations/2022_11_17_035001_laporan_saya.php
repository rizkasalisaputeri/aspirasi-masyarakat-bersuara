<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporan_sayas', function (Blueprint $table) {
            $table->id();
            $table->string('judul_laporan');
            $table->string('status')->default('Belum Diverifikasi');
            $table->string('rangkuman');
            $table->foreignId('kategori_id');
            $table->foreignId('instansi_id');
            $table->foreignId('user_id');
            $table->timestamp('tanggal')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laporanSaya');
    }
};
