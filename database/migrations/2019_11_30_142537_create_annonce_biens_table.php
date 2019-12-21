<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnonceBiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annonce_biens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('type_bien_id');
            $table->string('title');
            $table->string('ville');
            $table->string('quartier');
            $table->integer('prix');
            $table->integer('mettre_2');
            $table->longtext('description')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('annonce_biens');
    }
}
