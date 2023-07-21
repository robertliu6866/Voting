<?php

namespace Database\Seeders;
use App\Models\Category;
use App\Models\Idea;


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  
  // 在idea表格隨機產生30筆1~4的category 資料

    public function run(): void
    {
      Category::factory()->create(['name'=>'百岳行程']);
      Category::factory()->create(['name'=>'越野跑步行程']);
      Category::factory()->create(['name'=>'長城徒步行程']);
      Category::factory()->create(['name'=>'自由潛水行程']);

      Idea::factory(30)->create();
    }
}
