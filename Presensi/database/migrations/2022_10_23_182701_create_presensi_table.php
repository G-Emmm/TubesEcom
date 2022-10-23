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
        Schema::create('presensi', function (Blueprint $table) {
            $table->bigIncrements('id_presensi');
            $table->unsignedBigInteger('id_profil');
            $table->date('tanggal');
            $table->time('jam_datang');
            $table->time('jam_pulang');
            $table->double('longitude');
            $table->double('latitude');
            
            $table->foreign('id_profil')->references('id_profil')->on('user_profile');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('presensi');
    }
};
