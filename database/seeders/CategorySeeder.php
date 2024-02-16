<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(["name" => "ごはん"]);
        Category::create(["name" => "丼・カレー"]);
        Category::create(["name" => "主菜"]);
        Category::create(["name" => "麵類"]);
        Category::create(["name" => "小鉢・汁物"]);
        Category::create(["name" => "セット・定食"]);
    }
}
