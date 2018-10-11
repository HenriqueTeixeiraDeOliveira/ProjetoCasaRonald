<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Tag::class)->create(['title' => 'Soma']);
        factory(Tag::class)->create(['title' => 'Subtração']);
        factory(Tag::class)->create(['title' => 'Multiplicação']);
        factory(Tag::class)->create(['title' => 'Divisão']);
        factory(Tag::class)->create(['title' => 'Soluto']);
        factory(Tag::class)->create(['title' => 'Solvente']);
        factory(Tag::class)->create(['title' => 'Montanha']);
    }
}
