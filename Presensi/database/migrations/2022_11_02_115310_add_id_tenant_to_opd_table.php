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
        Schema::table('opd', function (Blueprint $table) {
            $table->unsignedBigInteger('id_tenant');

            $table->foreign('id_tenant')->references('id_tenant')->on('tenant')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('opd', function (Blueprint $table) {
            $table->dropColumn('id_tenant');
        });
    }
};
