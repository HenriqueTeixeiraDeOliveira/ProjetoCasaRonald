<?php

use Illuminate\Database\Seeder;

class SchoolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\School')->create(['topic' => 'Aprendendo a contar']);
        factory('App\School')->create(['topic' => 'Tabuada']);
        factory('App\School')->create(['topic' => 'Números Primos']);
        factory('App\School')->create(['topic' => 'Soletrando']);
        factory('App\School')->create(['topic' => 'Reino animal']);
        factory('App\School')->create(['topic' => 'Placas tectônicas']);
    }
}
