<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Annonceur;
use Faker\Generator as Faker;

$factory->define(Annonceur::class, function (Faker $faker) {
    $user = \App\User::where('roles','annonceur')->inRandomOrder()->first();
    return [
        'user_id' => $user->id,
        'register_number' => $faker->bothify('####???'),
        'business_address'=>$faker->address,
        'business_phone_number'=>$faker->phoneNumber
    ];
});
