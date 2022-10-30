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
        Schema::table('tenant', function (Blueprint $table) {
            $table->unsignedBigInteger('id_profil');

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
        Schema::table('tenant', function (Blueprint $table) {
            $table->dropColumn(['longitude', 'latitude']);
        });
    }
};
