<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Type_bien;
use Faker\Generator as Faker;

$factory->define(Type_bien::class, function (Faker $faker) {
    $tab_bien = ['Villa','Appartement','Chambre','Hotel','Maison de vacance','Bureau','Terrain','Local/surface/Magazin'];

    return [

        'nom' =>  $tab_bien[array_rand($tab_bien)]
    ];
});
