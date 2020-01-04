<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Annonce_bienTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Annonce_bien::class, 20)->create();

    }
}