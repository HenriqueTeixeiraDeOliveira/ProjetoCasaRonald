<?php

use Faker\Generator as Faker;

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

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Video::class, function (Faker $faker) {
    return [
        'user_id' => function() {
            return factory (App\User::class)->create()->id;
        },
        'watchable_type' => 'lesson',
        'watchable_id' => function() {
            return factory (App\Lesson::class)->create()->id;
        },
        'title' => $faker->word,
        'description' => $faker->sentence,
        'url' => $faker->url,
    ];
});

$factory->define(App\Subject::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'field' => $faker->randomElement(['Matemática','Química','Geografia'])
    ];
});

$factory->define(App\Advertisement::class, function (Faker $faker) {
    return [
        'campaign' => $faker->word,
        'sponsor' => $faker->word
    ];
});

$factory->define(App\Lesson::class, function (Faker $faker) {
    return [
        'subject_id' => function() {
            return factory (App\Subject::class)->create()->id;
        },
        'title' => $faker->word,
        'level' => $faker->randomElement(['Fácil','Intermediário','Difícil'])
    ];
});

$factory->define(App\Sticker::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'registration' => (string)$faker->numberBetween(1000,5000),
        'photo_path' => $faker->word,
        'type' => $faker->randomElement(['escola','livro','atividade'])
    ];
});



/*
|--------------------------------------------------------------------------
| Model States
|--------------------------------------------------------------------------
*/

$factory->state(App\Video::class, 'subject', [
    'watchable_type' => 'lesson',
    'watchable_id' => function() {
        return factory (App\Subject::class)->create()->id;
    },
]);

$factory->state(App\Video::class, 'advertisement', [
    'watchable_type' => 'advertisement',
    'watchable_id' => function() {
        return factory (App\Advertisement::class)->create()->id;
    },
]);