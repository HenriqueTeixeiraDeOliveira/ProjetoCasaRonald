<?php

use Illuminate\Database\Seeder;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::where('name', 'Admin')->first();
        $role_student = Role::where('name', 'Student')->first();
        $role_professor = Role::where('name', 'Professor')->first();

        $user1 = factory('App\User')->create([
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'password' => bcrypt('admin')
        ]);

        $user1->roles()->attach($role_admin);

        $user2 = factory('App\User')->create([
            'name' => 'Jane Doe',
            'email' => 'jane.doe@example.com',
            'password' => bcrypt('student')
        ]);

        $user2->roles()->attach($role_student);

        $user3 = factory('App\User')->create([
            'name' => 'Henrique Doe',
            'email' => 'henrique.doe@example.com',
            'password' => bcrypt('professor')
        ]);

        $user3->roles()->attach($role_professor);

        factory('App\User', 10)->create();
    }
}
