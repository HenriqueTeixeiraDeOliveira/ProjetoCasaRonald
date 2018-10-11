<?php

use Illuminate\Database\Seeder;
use App\Field;

class FieldsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Field::class)->create(['title' => 'Português']);
        factory(Field::class)->create(['title' => 'Matemática']);
        factory(Field::class)->create(['title' => 'Geografia']);
        factory(Field::class)->create(['title' => 'História']);
        factory(Field::class)->create(['title' => 'Química']);
        factory(Field::class)->create(['title' => 'Física']);
        factory(Field::class)->create(['title' => 'Sociologia']);
    }
}
