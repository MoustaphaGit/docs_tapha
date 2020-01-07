<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Type_annonce;
use Faker\Generator as Faker;

$factory->define(Type_annonce::class, function (Faker $faker) {
    $tab_annonce = ['Vente','Location','Vente-Prestige','Offre-Speciale','Cession-bail'];
    return [
        
        'name' => $tab_annonce[array_rand($tab_annonce)]
    ];
});
