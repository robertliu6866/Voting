<?php

namespace Tests\Feature;
use function Pest\Laravel\get;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Idea;
use App\Models\Category;




test('list of ideas shows on main page',function()
   {
   $categoryOne = Category::factory()->create(['name'=> '百岳行程']);
   $categoryTwo = Category::factory()->create(['name'=> '越野跑步行程']);
    
    $ideaOne = Idea::factory()->create([
        'title' => 'My First Idea',
        'category_id' => $categoryOne->id,
        'description' => 'Description of my first idea',
    ]);

    $ideaTwo = Idea::factory()->create([
        'title' => 'My Second Idea',
        'category_id' => $categoryTwo->id,
        'description' => 'Description of my Second idea',
    ]);
//斷言成功斷言響應具有成功（>= 200 且 < 300）HTTP 狀態代碼：assertSuccessful();
    $response  =  $this->get(route('idea.index'));
    $response -> assertSuccessful();
    $response -> assertSee($ideaOne->title);
    $response -> assertSee($ideaOne->description);
    $response -> assertSee($categoryOne->name);

    $response -> assertSee($ideaTwo->title);
    $response -> assertSee($ideaTwo->description);
    $response -> assertSee($ideaTwo->name);
    
   });




//  Test show page
test('single idea shsows correctly on the show page',function()
   {
    
    $categoryOne = Category::factory()->create(['name'=> '百岳行程']);

    $idea = Idea::factory()->create([
        'category_id' => $categoryOne->id,
        'title' => 'My First Idea',
        'description' => 'Description of my first idea',
    ]);
    
  //斷言成功斷言響應具有成功（>= 200 且 < 300）HTTP 狀態代碼：assertSuccessful();
      $response  =  $this->get(route('idea.show',$idea));
      $response -> assertSuccessful();
      $response -> assertSee($idea->title);
      $response -> assertSee($idea->description);
      $response -> assertSee($categoryOne->name);
  
  

    
   });


   test('ideas pagiantion woeks',function(){
$categoryOne = Category::factory()->create(['name'=> '百岳行程']);

 Idea::factory(Idea::PAGINATION_COUNT +1)->create([
    'category_id' => $categoryOne->id,
 ]);

 $ideaOne =Idea::find(1);
 $ideaOne->title = 'My First Idea';
 $ideaOne->save();

 $ideaEleven =Idea::find(11);
 $ideaEleven->title = 'My Eleventh Idea';
 $ideaEleven->save();

 $response  =  $this->get('/');
 $response -> assertSee($ideaOne->title);
 $response -> assertDontSee($ideaEleven->title);

 $response  =  $this->get('/?page=2');
 
 $response -> assertSee($ideaEleven->title);
 $response -> assertDontSee($ideaOne->title);
   });







   test('same_idea_title_different_slugs',function()
   {
    $categoryOne = Category::factory()->create(['name'=> '百岳行程']);

       $ideaOne = Idea::factory()->create([
        'category_id' => $categoryOne->id,
           'title' => 'My First Idea',
           'description' => 'Description for my first idea',
       ]);

       $response = $this->get(route('idea.show', $ideaOne));

       $response->assertSuccessful();
       $this->assertTrue(request()->path() === 'idea/my-first-idea');


   });


//    test('same idea',function()
//    {
      

//        $ideaTwo = Idea::factory()->create([
//            'title' => 'iuliu',
//            'description' => 'iuliu',
//        ]);

//        $response = $this->get(route('idea.show', $ideaTwo));
//        $response->assertSuccessful();
//        $this->assertTrue(request()->path() === 'idea/liuliu');


//    });