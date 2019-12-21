<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddQuartierToAnnonceBiens extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('annonce_biens', function (Blueprint $table) {
            $table->string('quartier')->after('description');
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
            $table->dropColumn('quartier');
        });
    }
}
