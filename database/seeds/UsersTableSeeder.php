<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\User')->create([
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
        ]);

        factory('App\User')->create([
            'name' => 'Jane Doe',
            'email' => 'jane.doe@example.com',
        ]);

        factory('App\User', 10)->create();
    }
}
