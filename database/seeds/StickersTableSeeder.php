<?php

use Illuminate\Database\Seeder;

class StickersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Sticker')->create([
            'name' => 'Henrique Teixeira',
            'registration' => '2514',
            'photo_path' => 'henrique2514.jpeg',
            'type' => 'escola'
        ]);

        factory('App\Sticker')->create([
            'name' => 'Dirce Maria',
            'registration' => '2510',
            'photo_path' => 'dirce2510.jpeg',
            'type' => 'livro'
        ]);

        factory('App\Sticker')->create([
            'name' => 'Jessica Cunha',
            'registration' => '2354',
            'photo_path' => 'jessica2354.jpeg',
            'type' => 'atividade'
        ]);

        factory('App\Sticker')->create([
            'name' => 'Arlette Oliveira',
            'registration' => '2454',
            'photo_path' => 'arlette2454.jpeg',
            'type' => 'escola'
        ]);

        factory('App\Sticker')->create([
            'name' => 'Angela Santos',
            'registration' => '2114',
            'photo_path' => 'angela2114.jpeg',
            'type' => 'livro'
        ]);

        factory('App\Sticker')->create([
            'name' => 'Sonia Neves',
            'registration' => '1000',
            'photo_path' => 'sonia1000.jpeg',
            'type' => 'atividade'
        ]);

        factory('App\Sticker')->create([
            'name' => 'Celso Pacheco',
            'registration' => '2000',
            'photo_path' => 'Celso2000.jpeg',
            'type' => 'escola'
        ]);

        factory('App\Sticker')->create([
            'name' => 'Sidney Gomes',
            'registration' => '2115',
            'photo_path' => 'sidney2115.jpeg',
            'type' => 'livro'
        ]);

        factory('App\Sticker')->create([
            'name' => 'Diego de Oliveira',
            'registration' => '2340',
            'photo_path' => 'diego2340.jpeg',
            'type' => 'atividade'
        ]);
    }
}