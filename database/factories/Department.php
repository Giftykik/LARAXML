<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Department;
use Faker\Generator as Faker;

$factory->define(Department::class, function (Faker $faker) {
    return [
        'dep_name' => $faker->word,
        //'dep_name' => "Department_N" . rand(1,7),
    ];
});
