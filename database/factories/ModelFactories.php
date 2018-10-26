<?php

use Faker\Generator as Faker;
use Carbon\Carbon;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

//------------------- USER -------------------//
$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'character_type' => 'student',
        'character_id' => function() {
            return factory(App\Student::class)->create()->id;
        },
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

//------------------- STUDENT -------------------//
$factory->define(App\Student::class, function (Faker $faker) {
    return [
        'points' => 0
    ];
});

//------------------- PROFESSOR -------------------//
$factory->define(App\Professor::class, function (Faker $faker) {
    return [
        'field_id' => function() {
            return factory(App\Field::class)->create()->id;
        }
    ];
});

//------------------- MANAGER -------------------//
$factory->define(App\Manager::class, function (Faker $faker) {
    return [
        'department' => $faker->randomElement(['Secretaria','RH','Educação']),
    ];
});


//------------------- ROLE -------------------//
$factory->define(App\Role::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->sentence
    ];
});

//------------------- PERMISSION -------------------//
$factory->define(App\Permission::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->sentence
    ];
});

//------------------- VIDEO -------------------//
$factory->define(App\Video::class, function (Faker $faker) {
    return [
        'user_id' => function() {
            return factory(App\User::class)->create()->id;
        },
        'watchable_type' => 'lesson',
        'watchable_id' => function() {
            return factory(App\Lesson::class)->create()->id;
        },
        'title' => $faker->word,
        'description' => $faker->sentence,
        'url' => 'https://www.youtube.com/embed/py_KGUWSVns',
    ];
});

//------------------- SUBJECT -------------------//
$factory->define(App\Subject::class, function (Faker $faker) {
    return [
        'field_id' => function() {
            return factory(App\Field::class)->create()->id;
        },
        'name' => $faker->word
    ];
});

//------------------- ADVERTISEMENT -------------------//
$factory->define(App\Advertisement::class, function (Faker $faker) {
    return [
        'campaign' => $faker->word,
        'sponsor' => $faker->word
    ];
});

//------------------- LESSON -------------------//
$factory->define(App\Lesson::class, function (Faker $faker) {
    return [
        'professor_id' => function () {
            $user = factory('App\User')->create([
                'character_type' => 'professor',
                'character_id' => function () {
                    return factory(App\Professor::class)->create(['field_id' => 1])->id; // To make sure the subject and the professor belongs to the same field.
                }
            ]);
            return $user->character->id;
        },
        'subject_id' => function () {
            return factory (App\Subject::class)->create(['field_id' => 1])->id;
        },
        'title' => $faker->word,
        'description' => $faker->sentence(20),
        'level' => $faker->randomElement(['Fácil','Intermediário','Difícil'])
    ];
});

//------------------- STICKER -------------------//
$factory->define(App\Sticker::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'registration' => (string)$faker->numberBetween(1000,5000),
        'photo_path' => $faker->word,
        'type' => $faker->randomElement(['escola','livro','atividade'])
    ];
});

//------------------- SCHOOL CLASSES -------------------//
$factory->define(App\School::class, function (Faker $faker) {
    return [
        'topic' => $faker->word,
        'date' => Carbon::now()
    ];
});

//------------------- BOOK -------------------//
$factory->define(App\Book::class, function (Faker $faker) {
    $genre = $faker->randomElement(['Infantil','Romance']);
    if ($genre == 'Infantil') {
        $library_id = "INF" . $faker->numberBetween(100,999);
    } else {
        $library_id = "ROM" . $faker->numberBetween(100,999);
    }
    $barcode = "7891234567" . $faker->numberBetween(100,999);
    return [
        'library_id' => $library_id,
        'title' => $faker->word,
        'genre' => $genre,
        'pages' => $faker->numberBetween(50,500),
        'author' => $faker->name,
        'publisher' => $faker->randomElement(['Grupo Cultivar', 'Deriva']),
        'barcode' => $barcode,
        'year' => $faker->year(),
        'x_position' => $faker->randomElement(['A','B','C','D','E','F','G','H']),
        'y_position' => $faker->numberBetween(1,4)
    ];
});

//------------------- EVENT -------------------//
$factory->define(App\Event::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'date' => Carbon::now()
    ];
});

//------------------- FIELD -------------------//
$factory->define(App\Field::class, function (Faker $faker) {
    return [
        'title' => $faker->word
    ];
});


//------------------- TAG -------------------//
$factory->define(App\Tag::class, function (Faker $faker) {
    return [
        'title' => $faker->word
    ];
});

/*
|--------------------------------------------------------------------------
| Model States
|--------------------------------------------------------------------------
*/

//------------------- STUDENT -------------------//
$factory->state(App\User::class, 'student', [
    'character_type' => 'student',
    'character_id' => function() {
        return factory (App\Student::class)->create()->id;
    },
]);

//------------------- PROFESSOR -------------------//
$factory->state(App\User::class, 'professor', [
    'character_type' => 'professor',
    'character_id' => function() {
        return factory (App\Professor::class)->create()->id;
    },
]);

//------------------- MANAGER -------------------//
$factory->state(App\User::class, 'manager', [
    'character_type' => 'manager',
    'character_id' => function() {
        return factory (App\Manager::class)->create()->id;
    },
]);



//------------------- LESSON -------------------//
$factory->state(App\Video::class, 'lesson', [
    'watchable_type' => 'lesson',
    'watchable_id' => function() {
        return factory (App\Lesson::class)->create()->id;
    },
]);

//------------------- ADVERTISEMENT -------------------//
$factory->state(App\Video::class, 'advertisement', [
    'watchable_type' => 'advertisement',
    'watchable_id' => function() {
        return factory (App\Advertisement::class)->create()->id;
    },
]);