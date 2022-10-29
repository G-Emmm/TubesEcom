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
        Schema::create('riwayat_order', function (Blueprint $table) {
            $table->bigIncrements('id_order');
            $table->unsignedBigInteger('id_wilayah');
            $table->unsignedBigInteger('id_paket');
            $table->date('tgl_awal');
            $table->date('tgl_akhir');
            $table->unsignedBigInteger('id_status_bayar');
            $table->date('tgl_bayar');

            $table->foreign('id_wilayah')->references('id_wilayah')->on('wilayah');
            $table->foreign('id_paket')->references('id_paket')->on('paket');
            $table->foreign('id_status_bayar')->references('id_status')->on('status_bayar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('riwayat_order');
    }
};
