<?php

use Illuminate\Database\Seeder;

class FieldsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Field')->create(['title' => 'Português']);
        factory('App\Field')->create(['title' => 'Matemática']);
        factory('App\Field')->create(['title' => 'Geografia']);
        factory('App\Field')->create(['title' => 'História']);
        factory('App\Field')->create(['title' => 'Química']);
        factory('App\Field')->create(['title' => 'Física']);
        factory('App\Field')->create(['title' => 'Sociologia']);
    }
}
