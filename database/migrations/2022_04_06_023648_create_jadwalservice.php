<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalservice extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwalservice', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_nama');
            $table->string('hari');
            $table->string('waktu');
            $table->unsignedBigInteger('id_jenis');
            $table->string('tanggal');
            $table->string('kuota');
            $table->string('mekanik');
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
        Schema::dropIfExists('jadwalservice');
    }
}
