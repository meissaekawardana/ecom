<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTBuktiBayar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bukti_bayar', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('bbUserId');
            $table->integer('bbTotalBayar');
            $table->integer('bbStatus');
            $table->integer('bbTotalItem');
            $table->string('bbFoto');
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
        Schema::dropIfExists('bukti_bayar');
    }
}
