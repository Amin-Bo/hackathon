<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Club;
use App\Member;
use Faker\Generator as Faker;

$factory->define(Club::class, function (Faker $faker) {
    return [
        'description' =>$faker->sentence(),
        'type'=>$faker->randomElement($array = array ('musique','theatre','gaming','peinture','sport')),
        'email'=>Member::all()->random()->email
    ];
});
