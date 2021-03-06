<?php

use App\Models\Type;
use Illuminate\Database\Seeder;

class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::truncate();
        Type::insert(array_map(function($val) {
            return [
                'name' => $val,
            ];
        }, Type::TYPES));
    }
}
