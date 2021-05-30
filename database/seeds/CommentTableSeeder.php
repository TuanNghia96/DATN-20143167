<?php

use Illuminate\Database\Seeder;
use App\Models\Comment;
use App\Models\Ticket;
use Faker\Factory;


class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Comment::truncate();
        $tickets = Ticket::get();
        $data = [];
        $faker = Factory::create();

        foreach ($tickets as $ticket) {
            array_push($data, [
                'buyer_id'=>$ticket->buyer_id,
                'event_id' => $ticket->event_id,
                'message' => $faker->realText(50),
                'rating' => rand(1, 5)
            ]);
        }
        Comment::insert($data);
    }
}
