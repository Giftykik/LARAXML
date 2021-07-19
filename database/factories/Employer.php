<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employer;
use Faker\Generator as Faker;

$factory->define(Employer::class, function (Faker $faker) {
    //$salary_type = function() {return factory(App\Employer::class)->create()->salary_type;};
    //var_dump ($salary_type);
    $salary_type = rand(0,1);
    return [
        //'dep_id' => function() {return factory(App\Department::class)->create()->id;}, 
        'dep_id' => rand(1,7),
        'emp_name' => $faker->name,
        'salary_type'=> $salary_type, //$faker->boolean,
        'salary_value'=> $salary_type?rand(1,10):rand(100,1000), 
        //$faker->numberBetween(199,499),
        
        'start_date' => $faker->dateTimeBetween('-1000 days', '-1 days'),
    ];
});
