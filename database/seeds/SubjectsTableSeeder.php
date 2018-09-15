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
        factory('App\Subject')->create(['name' => 'Análise Combinatória', 'field' => 'Matemática']);
        factory('App\Subject')->create(['name' => 'Probabilidade', 'field' => 'Matemática']);

        factory('App\Subject')->create(['name' => 'Soluções', 'field' => 'Química']);
        factory('App\Subject')->create(['name' => 'Radioatividade', 'field' => 'Química']);

        factory('App\Subject')->create(['name' => 'Relevos', 'field' => 'Geografia']);
        factory('App\Subject')->create(['name' => 'Latitude e Longitude', 'field' => 'Geografia']);
    }
}
