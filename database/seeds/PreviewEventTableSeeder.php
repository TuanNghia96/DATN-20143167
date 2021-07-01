<?php

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Event;
use App\Models\Type;
use Faker\Factory;

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
                'title' => 'MTV MB',
                'code' => $i++,
                'location' => $faker->randomElement(Helper::getLocation()),
                'summary' => 'Dấu ấn không chỉ trong quá trình tổ chức sự kiện mà còn có thể lưu giữ cả sau chương trình thông qua quà tặng gửi tới khách mời.<br>Bạn nên chuẩn bị những món quà nhỏ xinh nhưng độc đáo, ấn tượng, có biểu tượng của ccông ty nhằm để lại những kỷ niệm và dấu ấn khó quên với những ai từng tham dự lễ khai trương.',
                'avatar' => '/fakers/events/img_a1.jpg',
                'images' => json_encode([
                    [
                        'title' => 'title2',
                        'image' => 'fakers/events/img_sub101.jpg'
                    ],
                    [
                        'title' => 'title2',
                        'image' => 'fakers/events/img_sub102.jpg'
                    ],
                    [
                        'title' => 'title2',
                        'image' => 'fakers/events/img_sub103.jpg'
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
            ],
            [
                'name' => 'Thủy cung mở cửa',
                'title' => 'VenPear',
                'code' => $i++,
                'location' => $faker->randomElement(Helper::getLocation()),
                'summary' => 'Thủy cung S.E.A. Aquarium của Singapore được coi là thủy cung lớn nhất trên thế giới. Thủy cung mở cửa lần đầu tiên vào tháng 11 năm 2012',
                'avatar' => '/fakers/events/img_a2.jpg',
                'images' => json_encode([
                    [
                        'title' => 'title2',
                        'image' => 'fakers/events/img_sub201.jpg'
                    ],
                    [
                        'title' => 'title2',
                        'image' => 'fakers/events/img_sub202.jpg'
                    ],
                    [
                        'title' => 'title2',
                        'image' => 'fakers/events/img_sub203.jpg'
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
            ],
            [
                'name' => 'Combo thịt nướng giảm giá',
                'title' => 'BQB',
                'code' => $i++,
                'location' => $faker->randomElement(Helper::getLocation()),
                'summary' => 'Từ lâu, họp mặt bạn bè, người thân… tổ chức tiệc BBQ là loại hình thư giãn, giải trí được rất nhiều người yêu thích. Tuy nhiên, thật ra không nhiều người hiểu rõ khái niệm BBQ là gì? Hôm nay, cet.edu.vn sẽ cùng bạn đi tìm câu trả lời cho câu hỏi này, qua đó cũng giải thích xem vì sao BBQ lại được yêu thích đến như vậy?',
                'avatar' => '/fakers/events/img_a3.jpg',
                'images' => json_encode([
                    [
                        'title' => 'title2',
                        'image' => 'fakers/events/img_sub301.jpg'
                    ],
                    [
                        'title' => 'title2',
                        'image' => 'fakers/events/img_sub302.jpg'
                    ],
                    [
                        'title' => 'title2',
                        'image' => 'fakers/events/img_sub303.jpg'
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
            ],
            [
                'name' => 'Ra mắt Ephone',
                'title' => 'Eclip',
                'code' => $i++,
                'location' => $faker->randomElement(Helper::getLocation()),
                'summary' => 'Mới đây Giám đốc điều hành Xiaomi là Lei Jun cho biết rằng: Một trong những smartphone đã 4 năm tuổi (ra mắt năm 2017) đang khiến công ty tự hào. Theo ông, sau 4 năm thì Xiaomi Mi 6 vẫn có 2.15 triệu người dùng, đây là một điều khá ấn tượng đối với một chiếc smartphone cũ của Trung Quốc.',
                'avatar' => '/fakers/events/img_a4.jpg',
                'images' => json_encode([
                    [
                        'title' => 'title2',
                        'image' => 'fakers/events/img_sub401.jpg'
                    ],
                    [
                        'title' => 'title2',
                        'image' => 'fakers/events/img_sub402.jpg'
                    ],
                    [
                        'title' => 'title2',
                        'image' => 'fakers/events/img_sub403.jpg'
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
            ],
            [
                'name' => 'Hội thảo tuyển dụng',
                'title' => 'TaShiKo',
                'code' => $i++,
                'location' => $faker->randomElement(Helper::getLocation()),
                'summary' => 'Sáng ngày 27/09, Phòng Công tác sinh viên – Trường Đại học Công nghệ kết hợp với Tập đoàn Toshiba tổ chức hội thảo tuyển dụng việc làm nhằm cung cấp cho sinh viên sắp tốt nghiệp của trường các thông tin, vị trí tuyển dụng của tập đoàn trong năm 2017.',
                'avatar' => '/fakers/events/img_a5.jpg',
                'images' => json_encode([
                    [
                        'title' => 'title2',
                        'image' => 'fakers/events/img_sub601.jpg'
                    ],
                    [
                        'title' => 'title2',
                        'image' => 'fakers/events/img_sub602.jpg'
                    ],
                    [
                        'title' => 'title2',
                        'image' => 'fakers/events/img_sub603.jpg'
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
            ],
            [
                'name' => 'Kỷ niệm 30 năm',
                'title' => 'tập đoàn điện lực VN',
                'code' => $i++,
                'location' => $faker->randomElement(Helper::getLocation()),
                'summary' => 'Đội ngũ nhân viên tổ chức sự kiện chuyên nghiệp: bất kỳ sự thiếu sót nào xảy ra trong lễ ra mắt sản phẩm mới đều sẽ tạo những ấn tượng xấu với khách hàng vì thế yêu cầu mức độ hoàn thiện chuyên nghiệp và doanh nghiệp cần có một đội ngũ tổ chức sự kiện chuyên nghiệp nhất',
                'avatar' => '/fakers/events/img_a6.jpg',
                'images' => json_encode([
                    [
                        'title' => 'title2',
                        'image' => 'fakers/events/img_sub601.jpg'
                    ],
                    [
                        'title' => 'title2',
                        'image' => 'fakers/events/img_sub502.jpg'
                    ],
                    [
                        'title' => 'title2',
                        'image' => 'fakers/events/img_sub503.jpg'
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
            ],
            [
                'name' => 'Công bố tivi 4k',
                'title' => 'TCL',
                'code' => $i++,
                'location' => $faker->randomElement(Helper::getLocation()),
                'summary' => 'Lễ ra mắt sản phẩm mới – Product Launch Event là sự kiện được tổ chức để tạo ấn tượng và đưa sản phẩm đến với công chúng. Hay hiểu một cách khác đây là sự kiện gây sự chú ý và thu hút khách hàng, đối tác của doanh nghiệp.',
                'avatar' => '/fakers/events/img_a7.jpg',
                'images' => json_encode([
                    [
                        'title' => 'title2',
                        'image' => '/fakers/events/img_bg_' . rand(1, 50) . '.jpg',
                    ],
                    [
                        'title' => 'title2',
                        'image' => '/fakers/events/img_bg_' . rand(1, 50) . '.jpg',
                    ],
                    [
                        'title' => 'title2',
                        'image' => '/fakers/events/img_bg_' . rand(1, 50) . '.jpg',
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
            ],
            [
                'name' => 'GỬI LỜI TRI ÂN KHÁCH HÀNG',
                'title' => 'LALA',
                'code' => $i++,
                'location' => $faker->randomElement(Helper::getLocation()),
                'summary' => 'Trải qua chặng đường 5 năm phát triển Lala Shop đã không ngừng phát triển và lớn mạnh với một mục tiêu duy nhất là đem lại ngày càng nhiều lợi ích thiết thực nhất cho quý khách hàng. Bên cạnh đó chúng tôi cũng đã nhận được rất nhiều ý kiến đóng góp và xây dựng của Quý khách hàng để hoàn thiện hơn nữa trên con đường phát triển của mình.',
                'avatar' => '/fakers/events/img_a8.jpg',
                'images' => json_encode([
                    [
                        'title' => 'title2',
                        'image' => '/fakers/events/img_bg_' . rand(1, 50) . '.jpg',
                    ],
                    [
                        'title' => 'title2',
                        'image' => '/fakers/events/img_bg_' . rand(1, 50) . '.jpg',
                    ],
                    [
                        'title' => 'title2',
                        'image' => '/fakers/events/img_bg_' . rand(1, 50) . '.jpg',
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
            ],
            [
                'name' => 'Đi chùa đầu năm',
                'title' => 'Hội phật giáo',
                'code' => $i++,
                'location' => $faker->randomElement(Helper::getLocation()),
                'summary' => 'Hái lộc đầu năm cũng là phong tục có từ lâu tại Việt Nam. Tục hái lộc có ý nghĩa mang tài lộc về nhà, cành lá xanh tốt còn có ý nghĩa vui tươi.',
                'avatar' => '/fakers/events/img_a9.jpg',
                'images' => json_encode([
                    [
                        'title' => 'title2',
                        'image' => '/fakers/events/img_bg_' . rand(1, 50) . '.jpg',
                    ],
                    [
                        'title' => 'title2',
                        'image' => '/fakers/events/img_bg_' . rand(1, 50) . '.jpg',
                    ],
                    [
                        'title' => 'title2',
                        'image' => '/fakers/events/img_bg_' . rand(1, 50) . '.jpg',
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
            ],
            [
                'name' => 'Cuộc thi hoa hậu VN',
                'title' => 'VH-TT-DL',
                'code' => $i++,
                'location' => $faker->randomElement(Helper::getLocation()),
                'summary' => 'Thí sinh đã đạt danh hiệu Hoa Hậu, Á Hậu, Hoa Khôi, Á Khôi, Người Đẹp (Nhất, Nhì, Ba) tại các cuộc thi sắc đẹp cấp tỉnh, thành, ngành diễn ra trong năm 2019 hoặc 2020 sẽ được đặc cách vào vòng thi Chung khảo khu vực phía Bắc hoặc phía Nam, nếu như thí sinh đó phù hợp các quy định ở điều kiện dự thi và hoàn thiện hồ sơ theo đúng quy định tại Thể lệ này.',
                'avatar' => '/fakers/events/img_a10.jpg',
                'images' => json_encode([
                    [
                        'title' => 'title2',
                        'image' => '/fakers/events/img_bg_' . rand(1, 50) . '.jpg',
                    ],
                    [
                        'title' => 'title2',
                        'image' => '/fakers/events/img_bg_' . rand(1, 50) . '.jpg',
                    ],
                    [
                        'title' => 'title2',
                        'image' => '/fakers/events/img_bg_' . rand(1, 50) . '.jpg',
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
            ],
        );
    }
}
