<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define('\App\Models\Ticket', function (Faker $faker, $attrib) {
    return [
        'buyer_id' => 1,
        'event_id' => 240,
    ];
});
