<?php

use Illuminate\Database\Seeder;
use App\Models\Event;
use Faker\Factory;
use App\Models\Category;
use App\Models\Type;

class PreviewEventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Event::truncate();

        $faker = Factory::create();
        $randDatetime = $faker->dateTimeBetween($startDate = '-5 days', $endDate = '+5 days');
        $i = 1;
        Event::create(
            [
                'name' => 'Cty tài chính khai trương',
                'title' => 'Cty Money',
                'code' => $i++,
                'location' => $faker->randomElement(Helper::getLocation()),
                'summary' => 'Dấu ấn không chỉ trong quá trình tổ chức sự kiện mà còn có thể lưu giữ cả sau chương trình thông qua quà tặng gửi tới khách mời.<br>Bạn nên chuẩn bị những món quà nhỏ xinh nhưng độc đáo, ấn tượng, có biểu tượng của ccông ty nhằm để lại những kỷ niệm và dấu ấn khó quên với những ai từng tham dự lễ khai trương.',
                'avatar' => '/fakers/events/img_bg_' . rand(1, 50) . '.jpg',
                'images' => json_encode([
                    [
                        'title' => 'title2',
                        'image' => 'fakers/events/img_bg_' . rand(1, 50) . '.jpg'
                    ],
                    [
                        'title' => 'title2',
                        'image' => 'fakers/events/img_bg_' . rand(1, 50) . '.jpg'
                    ],
                    [
                        'title' => 'title2',
                        'image' => 'fakers/events/img_bg_' . rand(1, 50) . '.jpg'
                    ]
                ]),
                'type_id' => $faker->randomElement(Type::pluck('id')),
                'category_id' => $faker->randomElement(Category::pluck('id')),
                'public_date' => $randDatetime,
                'start_date' => date_add($randDatetime, date_interval_create_from_date_string('4 days')),
                'end_date' => date_add($randDatetime, date_interval_create_from_date_string('8 days')),
                'ticket_number' => $faker->numerify('##000'),
                'coupon_value' =>  rand(1, 99),
                'point' => $faker->numberBetween(900, 1000),
                'status' => $randDatetime > now()
                    ? array_rand(Event::$status)
                    : $faker->randomElement([Event::VALIDATED, Event::CANCEL])
            ]
        );
    }
}
