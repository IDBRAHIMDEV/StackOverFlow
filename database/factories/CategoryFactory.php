<?php

use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(App\Category::class, function (Faker $faker) {
    $name = $faker->sentence(3);
    return [
        'name' => $name,
        'slug' => Str::slug($name)
     ];
});
