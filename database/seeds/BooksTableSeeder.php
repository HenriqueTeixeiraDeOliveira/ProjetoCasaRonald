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
        factory(Book::class)->create(['title' => 'Dois a Dois']);
        factory(Book::class)->create(['title' => 'A culpa é das estrelas']);
        factory(Book::class)->create(['title' => 'Garotos da Fuzarca']);
        factory(Book::class)->create(['title' => 'Diário de uma Paixão']);
        factory(Book::class)->create(['title' => 'A menina que roubava livros']);
        factory(Book::class)->create(['title' => 'O astronauta sem regime']);
        factory(Book::class)->create(['title' => 'O pequeno príncipe']);
        factory(Book::class)->create(['title' => 'Poliana']);
    }
}
