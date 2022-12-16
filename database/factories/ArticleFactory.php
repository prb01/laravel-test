<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'user_id' => factory(\App\User::class), # calls UserFactory to create user and returns pk
        'title' => $faker->sentence
    ];
});
