<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAnnonceurIdToAnnonceBien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('annonce_biens', function (Blueprint $table) {
            $table->unsignedBigInteger('annonceur_id')->nullable(true);
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('annonce_bien', function (Blueprint $table) {
            $table->dropColumn('annonceur_id');
        });
    }
}
