<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::truncate();
        Category::insert(array_map(function($val) {
            return [
                'name' => $val,
            ];
        }, Category::CATEGORIES));
    }
}
