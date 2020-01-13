<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
          $this->call(UserTableSeeder::class);
          /*$this->call(AnnonceurTableSeeder::class);*/
          $this->call(Type_biensTableSeeder::class);
          $this->call(Type_annoncesTableSeeder::class);
          $this->call(RegionsTableSeeder::class);
        /* $this->call(Annonce_bienTableSeeder::class); */
    }
}
