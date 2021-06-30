<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Category;
use App\Models\Event;
use App\Models\Type;
use Faker\Generator as Faker;

$factory->define(Event::class, function (Faker $faker) {
    static $number = 1;
    $randDatetime = $faker->dateTimeBetween($startDate = '-15 months', $endDate = '+5 months');
    return [
        'name' => $faker->randomElement(Helper::getEventName()),
        'title' =>$faker->randomElement(Type::TITLE),
        'code' => $number++,
        'location' => $faker->randomElement(Helper::getLocation()),
        'summary' => $faker->realText(300),
        'avatar' => '/fakers/events/img_bg_' . rand(1, 77) . '.jpg',
        'images' => json_encode([
            [
                'title' => 'title2',
                'image' => 'fakers/events/img_bg_' . rand(1, 77) . '.jpg'
            ],
            [
                'title' => 'title2',
                'image' => 'fakers/events/img_bg_' . rand(1, 77) . '.jpg'
            ],
            [
                'title' => 'title2',
                'image' => 'fakers/events/img_bg_' . rand(1, 77) . '.jpg'
            ]
        ]),
        'type_id' => $faker->randomElement(Type::pluck('id')),
        'category_id' => $faker->randomElement(Category::pluck('id')),
        'public_date' => $randDatetime,
        'start_date' => date_add($randDatetime, date_interval_create_from_date_string('4 days')),
        'end_date' => date_add($randDatetime, date_interval_create_from_date_string('8 days')),
        'ticket_number' => $faker->numerify('##000'),
        'coupon_value' =>  rand(1, 99),
        'point' => $faker->numberBetween(0, 1000),
        'status' => $randDatetime > now()
            ? array_rand(Event::$status)
            : $faker->randomElement([Event::VALIDATED, Event::CANCEL])
    ];
});
