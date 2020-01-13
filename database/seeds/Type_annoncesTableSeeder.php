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
        DB::table('type_biens')->insert(
            [
                [
                    'name' => 'Cession-bail',
                ],
                [
                    'name' => 'Location',
                ],
                [
                    'name' => 'Offre-Speciale',
                ],
                [
                    'name' => 'Vente-Prestige',
                ],
                [
                    'name' => 'Vente',
                ]
            ]
        );
       /* factory(\App\Type_annonce::class, 10)->create();*/
    }
}
