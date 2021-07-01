<?php

use App\Models\Supplier;
use App\Models\Event;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierEventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('supplier_events')->truncate();

        $eventId =  Event::pluck('id')->toArray();
        $supplierId = Supplier::pluck('id')->toArray();
        $arrData = [];
        foreach ($eventId as $id) {
            array_push($arrData, [
                'supplier_id' => array_rand($supplierId),
                'event_id' => $id,
                'role' => 1,
            ]);
        }
        DB::table('supplier_events')->insert($arrData);
    }
}
