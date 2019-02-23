<?php

use Faker\Generator as Faker;
use App\User, App\Question;

$factory->define(App\Reply::class, function (Faker $faker) {
    return [
        'body' => $faker->paragraph(5),
        'user_id' => function() {
            return User::all()->random();
        },
        'question_id' => function() {
            return  Question::all()->random();
        }
    ];
});
