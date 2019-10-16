<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    
    return [
        'user_id' => 'T-' . $r->user_id,
        'user_name' => $r->name,
        'password' => \Illuminate\Support\Facades\Hash::make("123456"),
        'type' => 'teacher',
        'role' => 'subject teacher',
        'added_by' => auth()->user()->user_id
    ];
});
