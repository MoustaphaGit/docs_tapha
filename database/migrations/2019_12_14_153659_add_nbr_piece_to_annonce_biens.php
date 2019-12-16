<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNbrPieceToAnnonceBiens extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('annonce_biens', function (Blueprint $table) {
            $table->Integer('nombre_piece')->after('prix');
            $table->Integer('nombre_chambre')->after('nombre_piece');
            $table->dropColumn('title');
            $table->dropColumn('ville');
            $table->dropColumn('quartier');
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
            $table->dropColumn('nombre_piece');
            $table->dropColumn('nombre_chambre');
        });
    }
}
