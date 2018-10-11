<?php

use Illuminate\Database\Seeder;
use App\Subject;
class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Subject::class)->create(['name' => 'Análise Combinatória', 'field_id' => 2]);    //Matemática
        factory(Subject::class)->create(['name' => 'Probabilidade', 'field_id' => 2]);           //Matemática

        factory(Subject::class)->create(['name' => 'Soluções', 'field_id' => 5]);                //Química
        factory(Subject::class)->create(['name' => 'Radioatividade', 'field_id' => 5]);          //Química

        factory(Subject::class)->create(['name' => 'Relevos', 'field_id' => 3]);                 //Geografia
        factory(Subject::class)->create(['name' => 'Latitude e Longitude', 'field_id' => 3]);    //Geografia
    }
}
