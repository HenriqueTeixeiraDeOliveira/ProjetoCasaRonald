<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\School;
use App\Book;
use App\Event;

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

        $school = School::where('topic', 'Tabuada')->first();
        $book = Book::where('title', 'Dois a Dois')->first();
        $event = Event::where('name', 'Páscoa')->first();

        $user1 = factory('App\User')->state('manager')->create([
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'password' => bcrypt('admin')
        ]);

        $user1->roles()->attach($role_admin);

        $user2 = factory('App\User')->state('student')->create([
            'name' => 'Jane Doe',
            'email' => 'jane.doe@example.com',
            'password' => bcrypt('student')
        ]);

        $user2->roles()->attach($role_student);
        $user2->schools()->attach($school);
        $user2->books()->attach($book);
        $user2->events()->attach($event);

        for ($i = 1; $i<=7; $i++) {
            $user3 = factory('App\User')->create([
                'character_type' => 'professor',
                'character_id' => function () use ($i) {
                    return factory(App\Professor::class)->create(['field_id' => $i])->id;
                },
                'password' => bcrypt('professor')
            ]);
            $user3->roles()->attach($role_professor);
        }

    }
}
