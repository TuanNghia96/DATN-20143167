<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define('\App\Model\Tickets', function (Faker $faker) {
    return [
        'email' => $faker->unique()->email,
        'password' => Hash::make('123456'),
    ];
});
