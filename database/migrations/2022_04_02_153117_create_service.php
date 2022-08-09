<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateService extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('alamat');
            $table->string('no');
            $table->string('waktu');
            $table->string('tanggal');
            $table->string('jservice');
            $table->string('plat');
            $table->unsignedBigInteger('id_jenis');
            $table->string('status');
            $table->string('keterangan');
            $table->string('jam')->nullable();
            $table->string('kendala');
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
        Schema::dropIfExists('service');
    }
}
