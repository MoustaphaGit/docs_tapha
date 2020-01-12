<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class AnnonceurTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Annonceur::class, 3)->create();
    }
}
