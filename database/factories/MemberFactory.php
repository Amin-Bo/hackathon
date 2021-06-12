<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Member;
use App\User;
use Faker\Generator as Faker;

$factory->define(Member::class, function (Faker $faker) {
    return [
        'age' => $faker->numberBetween(12,30),
        'description' =>$faker->sentence(),
        'adresse' => $faker->city,
        'email'=>User::all()->random()->email
    ];
});
