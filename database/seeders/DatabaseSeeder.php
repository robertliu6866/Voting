<?php

namespace Database\Seeders;
use App\Models\Category;
use App\Models\Idea;
use App\Models\User;
use App\Models\Status;
use App\Models\Vote;


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  
  // 在idea表格隨機產生30筆1~4的category 資料

    public function run(): void
    {
      User::factory()->create([
         'name' => 'liuliu',
         'email' => 'robert@gmail.com',


      ]);
      User::factory(19)->create();
        
      Category::factory()->create(['name'=>'百岳行程']);
      Category::factory()->create(['name'=>'越野跑步行程']);
      Category::factory()->create(['name'=>'長城徒步行程']);
      Category::factory()->create(['name'=>'自由潛水行程']);

      Status::factory()->create(['name'=>'揪團中','classes' => 'bg-gray-200']);
      Status::factory()->create(['name'=>'已成團','classes' => 'bg-blue text-white']);
      Status::factory()->create(['name'=>'倒團','classes' => 'bg-blue text-white']);
      Status::factory()->create(['name'=>'參考','classes' => 'bg-green text-white']);
      Status::factory()->create(['name'=>'想法中','classes' => 'bg-gray-200']);

      Idea::factory(100)->create();
      //generate unique votes ensure idea_id and user_id are unique for each row
      //生成唯一的投票，確保每一行的 idea_id 和 user_id 都是唯一的

      foreach(range(1,20) as $user_id){
         foreach(range(1,100)as $idea_id){
      if($idea_id % 2 === 0 ){

        
        Vote::factory()->create([
          'user_id' => $user_id,
          'idea_id' => $idea_id,
        ]);
      }
         
        }}
    }
   

}
