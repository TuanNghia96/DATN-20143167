<?php

use App\Models\Buyer;
use App\Models\Event;
use App\Models\Ticket;
use Illuminate\Database\Seeder;

class TicketsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ticket::truncate();
        $eventArr = Event::pluck('id')->toArray();
        $buyerArr = Buyer::pluck('id')->toArray();
        $data = [];
        for ($i=1; $i < rand(50, 200); $i++) {
            array_push($data, [
                'buyer_id'=> $buyerArr[rand(0, count($buyerArr) - 1)],
                'event_id' => $eventArr[rand(0, count($eventArr) - 1)]
                ]);
        }
        Ticket::insert($data);
    }
}
