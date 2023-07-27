<?php

namespace Database\Seeders;
use App\Models\Category;
use App\Models\Idea;
use App\Models\Status;


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

      Status::factory()->create(['name'=>'揪團中','classes' => 'bg-gray-200']);
      Status::factory()->create(['name'=>'已成團','classes' => 'bg-blue text-white']);
      Status::factory()->create(['name'=>'倒團','classes' => 'bg-blue text-white']);
      Status::factory()->create(['name'=>'參考','classes' => 'bg-green text-white']);
      Status::factory()->create(['name'=>'想法中','classes' => 'bg-gray-200']);

      Idea::factory(30)->create();
    }
   

}
