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
        DB::table('type_biens')->insert(
            [
                [
                    'nom'   => 'Appartement',

                ],
                [
                    'nom'   => 'Bureau',

                ],
                [
                    'nom'   => 'Villa',

                ],
                [
                    'nom'   => 'Chambre',

                ],
                [
                    'nom'   => 'Maison de vacance',

                ],
                [
                    'nom'   => 'Hotel',

                ],
                [
                    'nom'   => 'Magazin',

                ]
            ]
        );
        /*factory(\App\Type_bien::class, 15)->create();*/

    }
}
