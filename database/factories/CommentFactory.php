<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define('\App\Models\Comment', function (Faker $faker, $attrib) {
    return [
        'buyer_id' => $attrib['buyer_id'],
        'event_id' => $attrib['event_id'],
        'rating' => $faker->numberBetween(1, 5),
        'message' => $faker->text(100),
    ];
});
