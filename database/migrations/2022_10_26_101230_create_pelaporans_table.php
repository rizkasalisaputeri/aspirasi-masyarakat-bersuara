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
        Schema::create('pelaporans', function (Blueprint $table) {
            $table->id();
            $table->string('judul_laporan');
            $table->string('rangkuman');
            $table->foreignId('kategori_id');
            $table->foreignId('instansi_id');
            $table->foreignId('user_id');
            $table->date('tanggal')->nullable();
            $table->tinyInteger('status')->default('1');
            $table->string('tanggapan')->default('-');
            $table->string('lampiran_user')->nullable();
            $table->string('lampiran_adm')->nullable();
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
        Schema::dropIfExists('pelaporans');
    }
};
