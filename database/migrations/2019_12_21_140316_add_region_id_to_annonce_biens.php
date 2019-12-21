<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRegionIdToAnnonceBiens extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('annonce_biens', function (Blueprint $table) {
            $table->unsignedBigInteger('region_id')->after('localite_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('annonce_biens', function (Blueprint $table) {
            $table->dropColumn('region_id');
        });
    }
}
