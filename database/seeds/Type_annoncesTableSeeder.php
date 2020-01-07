<?php

use Illuminate\Database\Seeder;

class Type_annoncesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Type_annonce::class, 10)->create();
    }
}
