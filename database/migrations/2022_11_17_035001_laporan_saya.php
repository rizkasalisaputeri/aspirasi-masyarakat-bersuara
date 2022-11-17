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
        Schema::create('laporanSaya', function (Blueprint $table) {
            $table->id();
            $table->string('judul_laporan');
            $table->string('tgl_laporan');
            $table->string('asal_instansi');
            $table->string('status');
            $table->string('file_laporan');
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
