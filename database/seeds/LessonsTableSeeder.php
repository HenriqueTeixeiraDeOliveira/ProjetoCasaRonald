<?php

use Illuminate\Database\Seeder;

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
            'subject_id' => '1',
            'title' => 'Arranjo',
            'level' => 'Fácil'
        ]);

        factory('App\Lesson')->create([
            'subject_id' => '1',
            'title' => 'Combinação',
            'level' => 'Intermediário'
        ]);

        factory('App\Lesson')->create([
            'subject_id' => '2',
            'title' => 'Definições Básicas de Probabilidade',
            'level' => 'Fácil'
        ]);

        factory('App\Lesson')->create([
            'subject_id' => '3',
            'title' => 'Classificação de solutos e solventes ',
            'level' => 'Díficil'
        ]);

        factory('App\Lesson')->create([
            'subject_id' => '6',
            'title' => 'Utilizando coordenadas geográficas',
            'level' => 'Fácil'
        ]);
    }
}
