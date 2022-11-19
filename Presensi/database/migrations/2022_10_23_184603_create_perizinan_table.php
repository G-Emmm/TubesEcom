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
        Schema::create('perizinan', function (Blueprint $table) {
            $table->bigIncrements('id_perizinan');
            $table->unsignedBigInteger('id_profil')->nullable();
            $table->date('start_izin');
            $table->date('end_izin');
            $table->string('jenis_izin');
            $table->string('keperluan');
            $table->text('keterangan');
            $table->boolean('status');

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
        Schema::dropIfExists('perizinan');
    }
};
