<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Region;
use Faker\Generator as Faker;

$factory->define(Region::class, function (Faker $faker) {
    $tab_localite = ['Dakar','Thies','Saint-louis','Diourbel','Zinguichor',
    'louga','Mbour','Rufisque','Guediawaye','Pikine','Kedougou',
    'Joal Fadiouth','Sédhiou','Cap Skirring','Bargny','Richard-Toll','Kaolack','Touba','Tivaouane'];

    return [
        
        'nom' => $tab_localite[array_rand($tab_localite)]    
            
  ];
});
