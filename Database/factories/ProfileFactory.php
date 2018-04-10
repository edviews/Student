<?php

use Faker\Generator as Faker;
use Modules\Student\Entities\Profile;

$factory->define(Profile::class, function (Faker $faker) {
    static $number = 1;
    $marital = $faker->randomElements(['single', 'married', 'common law', 'legally separated', 'divorced', 'widowed'])[0];

    return [
        'student_id' => $number++,
        'middle_name' => $faker->name,
        'marital_status' => $marital,
        'citizenship' => $faker->country,
        'country_of_birth' => $faker->country,
        'address' => $faker->address,
        'parish' => $faker->streetName,
        'home_phone' => $faker->phoneNumber,
        'cell_phone' => $faker->phoneNumber,
        'facebook' => $faker->name,
        'twitter' => $faker->name,
    ];
});
