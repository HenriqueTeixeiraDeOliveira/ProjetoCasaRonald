<?php

use Illuminate\Database\Seeder;
use App\Book;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Book::class)->create(['title' => 'Dois a Dois', 'type' => 'romance']);
        factory(Book::class)->create(['title' => 'A culpa é das estrelas', 'type' => 'drama']);
        factory(Book::class)->create(['title' => 'Garotos da Fuzarca', 'type' => 'comédia']);
        factory(Book::class)->create(['title' => 'Diário de uma Paixão', 'type' => 'romance']);
        factory(Book::class)->create(['title' => 'A menina que roubava livros', 'type' => 'drama']);
        factory(Book::class)->create(['title' => 'O astronauta sem regime', 'type' => 'comédia']);
    }
}
