<?php

use Illuminate\Database\Seeder;

class Type_biensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Type_bien::class, 15)->create();

    }
}
