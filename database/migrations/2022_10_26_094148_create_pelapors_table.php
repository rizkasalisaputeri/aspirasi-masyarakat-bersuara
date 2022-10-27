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
        Schema::create('pelapors', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pelapor');
            $table->string('nik_pelapor');
            $table->string('email_pelapor');
            $table->string('nohp_pelapor');
            $table->boolean('jk_pelapor')->nullable()->default(false);
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
        Schema::dropIfExists('pelapors');
    }
};
