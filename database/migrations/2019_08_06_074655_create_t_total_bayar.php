<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTTotalBayar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('total_bayar', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('tobaBbId');
            $table->integer('tobaBukuId');
            $table->integer('tobaJml');
            $table->integer('tobaKategoriId');
            $table->string('tobaIdUser');
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
        Schema::dropIfExists('total_bayar');
    }
}
