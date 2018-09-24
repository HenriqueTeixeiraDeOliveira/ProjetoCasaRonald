<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Book')->create(['title' => 'Dois a Dois', 'type' => 'romance']);
        factory('App\Book')->create(['title' => 'A culpa é das estrelas', 'type' => 'drama']);
        factory('App\Book')->create(['title' => 'Garotos da Fuzarca', 'type' => 'comédia']);
        factory('App\Book')->create(['title' => 'Diário de uma Paixão', 'type' => 'romance']);
        factory('App\Book')->create(['title' => 'A menina que roubava livros', 'type' => 'drama']);
        factory('App\Book')->create(['title' => 'O astronauta sem regime', 'type' => 'comédia']);
    }
}
