<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Teacher;
use Faker\Generator as Faker;
use App\Auth;

$factory->define(Teacher::class, function (Faker $faker) {
    return [
        'teacher_name'=> $faker->name,
        'subject'=> $faker->word,
        'phone'=> $faker->phoneNumber,
        'image'=> 'image',
        'join_date'=> $faker->date,
        'user_id'=> ''
    ];
});
