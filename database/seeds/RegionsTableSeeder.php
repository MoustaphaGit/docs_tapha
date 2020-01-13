<?php

use Illuminate\Database\Seeder;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regions')->insert(
            [
                [
                    'nom'   => 'louga',
                ],
                [
                    'nom'   => 'Rufisque',
                ],
                [
                    'nom'   => 'Cap Skirring',
                ],
                [
                    'nom'   => 'Bargny',
                ],
                [
                    'nom'   => 'Pikine',
                ],
                [
                    'nom'   => 'Dakar',
                ],
                [
                    'nom'   => 'Richard-Toll',
                ],
                [
                    'nom'   => 'Guediawaye',
                ],
                [
                    'nom'   => 'Kedougou',
                ],
                [
                    'nom'   => 'Mbour',
                ],
                [
                    'nom'   => 'Thies',
                ],
                [
                    'nom'   => 'Kaolack',
                ],
                [
                    'nom'   => 'Saint-louis',
                ],
                [
                    'nom'   => 'Tivaouane',
                ],
                [
                    'nom'   => 'Joal Fadiouth',
                ],
                [
                    'nom'   => 'Sédhiou',
                ],
                [
                    'nom'   => 'Diourbel',
                ]
            ]
        );
        /*factory(\App\Region::class, 22)->create();*/
    }
}
