<?php

use Illuminate\Database\Seeder;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Subject')->create(['name' => 'Análise Combinatória', 'field_id' => 2]);    //Matemática
        factory('App\Subject')->create(['name' => 'Probabilidade', 'field_id' => 2]);           //Matemática

        factory('App\Subject')->create(['name' => 'Soluções', 'field_id' => 5]);                //Química
        factory('App\Subject')->create(['name' => 'Radioatividade', 'field_id' => 5]);          //Química

        factory('App\Subject')->create(['name' => 'Relevos', 'field_id' => 3]);                 //Geografia
        factory('App\Subject')->create(['name' => 'Latitude e Longitude', 'field_id' => 3]);    //Geografia
    }
}
