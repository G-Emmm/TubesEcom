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
        Schema::create('tenant', function (Blueprint $table) {
            $table->bigIncrements('id_tenant');
            $table->unsignedBigInteger('id_wilayah');
            $table->text('alamat_tenant');
            $table->string('no_telptent');
            $table->double('longitude');
            $table->double('latitude');
            $table->foreign('id_wilayah')->references('id_wilayah')->on('wilayah');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tenant');
    }
};