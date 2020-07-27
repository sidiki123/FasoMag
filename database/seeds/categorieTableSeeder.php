<?php

use Illuminate\Database\Seeder;

class categorieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorie')->insert([

            [
                'idcategorie' => 1,
                'categorie' => 'Politique',
                'idActualities'=>'1',
            ],

            [
                'idcategorie' => 2,
                'categorie' => 'Economie',
                'idActualities'=>'2',
            ],

            [
                'idcategorie' => 3,
                'categorie' => 'Societe',
                'idActualities'=>'3',
            ],

            [
                'idcategorie' => 4,
                'categorie' => 'Cooperation',
                'idActualities'=>'4',
            ],
            [
                'idcategorie' => 5,
                'categorie' => 'Culture',
                'idActualities'=>'5',        ],
    
        ]);
    }
}
