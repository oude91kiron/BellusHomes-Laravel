<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\City;
use Faker\Generator as Faker;

$factory->define(City::class, function (Faker $faker) {
    return [
        //
        'photo' => $faker->name,
        'name' => $faker->name,
        'is_active' => '1',
    ];
});
