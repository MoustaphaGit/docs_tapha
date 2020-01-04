<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Annonce_bien;
use Faker\Generator as Faker;

$factory->define(Annonce_bien::class, function (Faker $faker) {
    $prix =[100000,200000,300000,400000,500000,450000,350000,250000,1000000,2000000,
        30000000,50000000,650000,700000,75000, 700000];
    $image_search_tableau = ['house','room','ground',"living room","interior","indoor","apartment"];
    $quartier= ['Rufisque','Dakar', 'Pikine',' Bargny','Guédiawaye','Sébikhotane','Diamniadio',
    'Bambylor','Tivaouane Peulh','Niaga' ,'Biscuiterie','Cambérène','Dieuppeul','Derklé','Fann','Point E','Amitié',
    'Gueule Tapée','Fass','Colobane','Grand Yoff','Grand-Dakar','Hann Bel-Air','HLM','Médina','Mermoz','Sacré-Cœur',
    'Ngor','Ouakam','Parcelles Assainies','Patte d/Oie','Dakar-Plateau','Sicap-Liberté',' Yoff'];
    $type_a= App\Type_annonce::all()->random(1)->first();
    $type_b= App\Type_bien::all()->random(1)->first();
    $region= App\Region::all()->random(1)->first();

    return [
            'nombre_piece'     =>$faker->numberBetween(3,10),
            'mettre_2'         =>$faker->numberBetween(100,600),
            'nombre_chambre'   =>$faker->numberBetween(1,5),
            'description'       =>$faker->paragraphs(2,true),
            'prix'              =>$prix[array_rand($prix)],
            'quartier'          =>$quartier[array_rand($quartier)],
            'images'            => "https://source.unsplash.com/1600x900/?".array_rand($image_search_tableau),
            'type_bien_id'      =>$type_b->id,
            'type_annonce_id'   =>$type_a->id,
            'region_id'         =>$region->id
        ];
});
