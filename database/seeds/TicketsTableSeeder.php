<?php

use App\Models\Buyer;
use App\Models\Event;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class TicketsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Comment::truncate();
        \App\Models\Ticket::truncate();
        $eventArr = Event::pluck('id')->toArray();
        $buyerArr = Buyer::pluck('id')->toArray();

        $ticketData = [];
        $commentData = [];
        factory('\App\Models\Ticket', 50)->make(['buyerIds' => $buyerArr, 'eventIds' => $eventArr])->each(function ($ticker) {
            factory('\App\Models\Comment')->make(['buyer_id' => $ticker->buyer_id, 'event_id' => $ticker->event_id]);
        });
    }
}
