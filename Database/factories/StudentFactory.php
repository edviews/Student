<?php

use Faker\Generator as Faker;
use Modules\Student\Entities\Student;

$factory->define(Student::class, function (Faker $faker) {
    $gender = $faker->randomElements(['male', 'female'])[0];

    return [
        'title' => $faker->title,
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'gender' => $gender,
        'date_of_birth' => $faker->date,
        'id_number' => $faker->ean8,
    ];
});
