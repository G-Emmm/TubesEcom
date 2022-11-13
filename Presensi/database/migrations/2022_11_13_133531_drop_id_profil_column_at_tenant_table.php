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
            $table->dropForeign('tenant_id_profil_foreign');

            $table->dropColumn('id_profil');
            $table->dropColumn('longitude');
            $table->dropColumn('latitude');

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
            //
        });
    }
};
