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
        Schema::create('pesanans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_tas');
            $table->unsignedBigInteger('id_pemesan');
            $table->date('tanggal');
            $table->string('status');
            $table->timestamps();

            $table->foreign('id_tas')->references('id')->on('tas')->onDelete('cascade');
            $table->foreign('id_pemesan')->references('id')->on('pemesans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesanans');
    }
};
