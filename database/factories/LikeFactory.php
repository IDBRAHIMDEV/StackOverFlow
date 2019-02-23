<?php

use Faker\Generator as Faker;
use App\User, App\Reply;

$factory->define(App\Like::class, function (Faker $faker) {
    return [
        'user_id' => function() {
            return User::all()->random();
        },
        'reply_id' => function() {
            return  Reply::all()->random();
        }
    ];
});
