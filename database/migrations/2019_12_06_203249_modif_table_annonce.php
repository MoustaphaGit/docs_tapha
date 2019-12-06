<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifTableAnnonce extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::dropIfExists('annonce_biens');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    Schema::create('annonce_biens',function(Blueprint $table){
        $table->bigIncrements('id');
        $table->string('title');
        $table->string('localisation');
        $table->integer('prix');
        $table->string('description');
        $table->integer('nbr_mettre') ->nullable();
        $table->timestamps();
    });

    }
}