<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddcolumsToAnnonceBiens extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('annonce_biens', function (Blueprint $table) {
            $table->unsignedBigInteger('type_annonce_id')->after('type_bien_id');
            $table->unsignedBigInteger('localite_id')->after('type_annonce_id');
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
            $table->dropColumn('type_annonce_id');
            $table->dropColumn('localite_id');
        });
    }
}
