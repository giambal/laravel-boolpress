<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        "title"=>$faker->word,
        "writer_name"=>$faker->firstName,
        "writer_lastname"=>$faker->lastName,
        "content"=>$faker->sentence(10)
    ];
});
