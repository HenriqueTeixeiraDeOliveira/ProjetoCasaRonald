<?php

use Illuminate\Database\Seeder;
use App\School;

class SchoolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(School::class)->create(['topic' => 'Aprendendo a contar']);
        factory(School::class)->create(['topic' => 'Tabuada']);
        factory(School::class)->create(['topic' => 'Números Primos']);
        factory(School::class)->create(['topic' => 'Soletrando']);
        factory(School::class)->create(['topic' => 'Reino animal']);
        factory(School::class)->create(['topic' => 'Placas tectônicas']);
    }
}
