<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  
    public function up()
    {
        Schema::create('tb_reservasi', function (Blueprint $table) {
            $table->id('id_reservasi');
            $table->date('tgl_checkin');
            $table->date('tgl_checkout');
            $table->string('nama_pemesan'); 
            $table->string('nama_tamu'); 
            $table->string('tipe_kamar'); 
            $table->string('email');
            $table->integer('no_telp');
            $table->integer('jumlah_kamar');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tb_reservasi');
    }
};
