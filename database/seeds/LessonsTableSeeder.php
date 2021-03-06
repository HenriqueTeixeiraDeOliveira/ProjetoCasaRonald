<?php

use Illuminate\Database\Seeder;
use App\Tag;
use App\Lesson;
use App\User;

class LessonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = User::where('id', '1')->first();
        $user2 = User::where('id', '2')->first();
        $user3 = User::where('id', '3')->first();

        $tag1 = Tag::where('title', 'Soma')->first();
        $tag2 = Tag::where('title', 'Subtração')->first();
        $tag3 = Tag::where('title', 'Multiplicação')->first();
        $tag4 = Tag::where('title', 'Divisão')->first();
        $tag5 = Tag::where('title', 'Soluto')->first();
        $tag6 = Tag::where('title', 'Solvente')->first();
        $tag7 = Tag::where('title', 'Montanha')->first();

        $lesson1 = factory(Lesson::class)->create([
            'subject_id' => 1,          //Análise Combinatória
            'professor_id' => 2,        //Matemática
            'title' => 'Arranjo',
            'level' => 'Fácil'
        ]);

        $lesson1->tags()->attach($tag1);
        $lesson1->tags()->attach($tag2);
        $lesson1->tags()->attach($tag3);
        $lesson1->tags()->attach($tag4);

        $lesson1->like($user1);
        $lesson1->like($user2);
        $lesson1->like($user3);

        $lesson1->favorite($user1);
        $lesson1->favorite($user2);
        $lesson1->favorite($user3);

        $lesson1->complete($user1);
        $lesson1->complete($user2);
        $lesson1->complete($user3);

        $lesson2 = factory(Lesson::class)->create([
            'subject_id' => 1,          //Análise Combinatória
            'professor_id' => 2,        //Matemática
            'title' => 'Combinação',
            'level' => 'Intermediário'
        ]);

        $lesson2->tags()->attach($tag1);
        $lesson2->tags()->attach($tag2);
        $lesson2->tags()->attach($tag3);
        $lesson2->tags()->attach($tag4);

        $lesson3 = factory(Lesson::class)->create([
            'subject_id' => 2,          //Probabilidade
            'professor_id' => 2,        //Matemática
            'title' => 'Definições Básicas de Probabilidade',
            'level' => 'Fácil'
        ]);

        $lesson3->tags()->attach($tag1);
        $lesson3->tags()->attach($tag2);
        $lesson3->tags()->attach($tag3);
        $lesson3->tags()->attach($tag4);

        $lesson4 = factory(Lesson::class)->create([
            'subject_id' => 3,          //Soluções
            'professor_id' => 5,        //Química
            'title' => 'Classificação de solutos e solventes ',
            'level' => 'Díficil'
        ]);

        $lesson4->tags()->attach($tag5);
        $lesson4->tags()->attach($tag6);

        $lesson5 = factory(Lesson::class)->create([
            'subject_id' => 6,          //Latitude e Longitude
            'professor_id' => 3,        //Geografia
            'title' => 'Utilizando coordenadas geográficas',
            'level' => 'Fácil'
        ]);

        $lesson5->tags()->attach($tag7);
    }
}
