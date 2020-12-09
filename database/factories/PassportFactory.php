<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Passport;
use Faker\Generator as Faker;

$factory->define(Passport::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'nationality' => $faker->country,
        'expired_at' => now()->addYears(10),
        'user_id' => factory(App\User::class)
    ];
});
