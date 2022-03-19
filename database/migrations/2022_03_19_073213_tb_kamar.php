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
Schema::create('tb_kamar', function (Blueprint $table) {
            $table->id('id_kamar');
            $table->string('tipe_kamar');
            $table->string('jumlah_kamar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('tb_kamar');
    }
};
