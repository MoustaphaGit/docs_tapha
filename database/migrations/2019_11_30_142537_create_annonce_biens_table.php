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
            $table->string('titre_annonce');
            $table->string('type_annonce');
            $table->string('localisation');
            $table->longtext('description');
            $table->decimal('prix');
            $table->double('nbr_mettre_2');
            
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
