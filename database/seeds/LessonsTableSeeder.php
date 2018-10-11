<?php

use Illuminate\Database\Seeder;
use App\Subject;

class LessonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Lesson')->create([
            'subject_id' => 1,          //Análise Combinatória
            'professor_id' => 2,        //Matemática
            'title' => 'Arranjo',
            'level' => 'Fácil'
        ]);

        factory('App\Lesson')->create([
            'subject_id' => 1,          //Análise Combinatória
            'professor_id' => 2,        //Matemática
            'title' => 'Combinação',
            'level' => 'Intermediário'
        ]);

        factory('App\Lesson')->create([
            'subject_id' => 2,          //Probabilidade
            'professor_id' => 2,        //Matemática
            'title' => 'Definições Básicas de Probabilidade',
            'level' => 'Fácil'
        ]);

        factory('App\Lesson')->create([
            'subject_id' => 3,          //Soluções
            'professor_id' => 5,        //Química
            'title' => 'Classificação de solutos e solventes ',
            'level' => 'Díficil'
        ]);

        factory('App\Lesson')->create([
            'subject_id' => 6,          //Latitude e Longitude
            'professor_id' => 3,        //Geografia
            'title' => 'Utilizando coordenadas geográficas',
            'level' => 'Fácil'
        ]);
    }
}
