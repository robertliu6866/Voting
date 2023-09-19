<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Http\Livewire\IdeaShow;
use Livewire\Livewire;
use Tests\TestCase;
use App\Models\User;
use App\Models\Category;
use App\Models\Status;
use App\Models\Idea;
use App\Models\Vote;



//顯示頁含想法顯示 livewire 組件
 test('show_page_contains_idea_show_livewire_component',function()

 
 {

    $user = User::factory()->create();
    $categoryOne = Category::factory()->create(['name'=> '百岳行程']);
    $categoryTwo = Category::factory()->create(['name'=> '越野跑步行程']);
 
   $statusOpen = Status::factory()->create(['name'=>'揪團中','classes' => 'bg-gray-200']);
   $statusConidering =  Status::factory()->create(['name'=>'已成團','classes' => 'bg-blue text-white']);
 
     
     $idea = Idea::factory()->create([ 
          'user_id' =>$user->id,
         'title' => 'My First Idea',
         'category_id' => $categoryOne->id,
         'status_id' => $statusOpen->id,
         'description' => 'Description of my first idea',
     ]);
     $this->get(route('idea.show',$idea))
     ->assertSeeLivewire('idea-show');

 });


//顯示頁面正確收到票數'
 test('show_page_correctly_receives_votes_count',function()

 
 {

    $user = User::factory()->create();
    $userB = User::factory()->create();


    $categoryOne = Category::factory()->create(['name'=> '百岳行程']);
    $categoryTwo = Category::factory()->create(['name'=> '越野跑步行程']);
 
   $statusOpen = Status::factory()->create(['name'=>'揪團中','classes' => 'bg-gray-200']);
   $statusConidering =  Status::factory()->create(['name'=>'已成團','classes' => 'bg-blue text-white']);
 
     
     $idea = Idea::factory()->create([ 
          'user_id' =>$user->id,
         'title' => 'My First Idea',
         'category_id' => $categoryOne->id,
         'status_id' => $statusOpen->id,
         'description' => 'Description of my first idea',
     ]);
     Vote::factory()->create([
        'idea_id' => $idea->id,
        'user_id' => $user->id,
    ]);

     Vote::factory()->create([
        'idea_id' => $idea->id,
        'user_id' => $userB->id,
    ]);


     $this->get(route('idea.show',$idea))
     ->assertViewHas('votesCount',2);

 });




//計票。 在顯示頁面 Livewire 組件上正確顯示
 test('user_who_is_logged_in_shows_voted_if_idea_alredy_voted_for',function()

 
 {

    $user = User::factory()->create();
   

    
    $categoryOne = Category::factory()->create(['name'=> '百岳行程']);
    $categoryTwo = Category::factory()->create(['name'=> '越野跑步行程']);
 
   $statusOpen = Status::factory()->create(['name'=>'揪團中','classes' => 'bg-gray-200']);
   $statusConidering =  Status::factory()->create(['name'=>'已成團','classes' => 'bg-blue text-white']);
 
     
     $idea = Idea::factory()->create([ 
          'user_id' =>$user->id,
         'title' => 'My First Idea',
         'category_id' => $categoryOne->id,
         'status_id' => $statusOpen->id,
         'description' => 'Description of my first idea',
     ]);

     Vote::factory()->create([
        'idea_id' => $idea->id,
        'user_id' => $user->id,
        
    ]);

 Livewire::actingAs($user)
    ->test(IdeaShow::class,[
    'idea' => $idea,
     'votesCount' => 5,
 ])
 ->assertSet('hasVoted',true)
  ->assertSee('已參加');
   
   

 });
//  “未登錄的用戶在嘗試投票時會被重定向到登錄頁面”
 test('user_who_is_not_logged_in_is_redirected_to_login_page_whren_trying_to_vote',function()

 
 {

    $user = User::factory()->create();
   

    
    $categoryOne = Category::factory()->create(['name'=> '百岳行程']);
    $categoryTwo = Category::factory()->create(['name'=> '越野跑步行程']);
 
   $statusOpen = Status::factory()->create(['name'=>'揪團中','classes' => 'bg-gray-200']);
   $statusConidering =  Status::factory()->create(['name'=>'已成團','classes' => 'bg-blue text-white']);
 
     
     $idea = Idea::factory()->create([ 
          'user_id' =>$user->id,
         'title' => 'My First Idea',
         'category_id' => $categoryOne->id,
         'status_id' => $statusOpen->id,
         'description' => 'Description of my first idea',
     ]);

     Livewire::test(IdeaShow::class,[
     'idea' => $idea,
      'votesCount' => 5,
     ])
  ->call('vote')
   ->assertRedirect(route('login'));
    

   
   

 });

//登入的用戶可以為想法投票
 test('user_who_is_logged_in_is_can_vote_for_idea',function()

 
 {

    $user = User::factory()->create();
   

    
    $categoryOne = Category::factory()->create(['name'=> '百岳行程']);
    $categoryTwo = Category::factory()->create(['name'=> '越野跑步行程']);
 
   $statusOpen = Status::factory()->create(['name'=>'揪團中','classes' => 'bg-gray-200']);
   $statusConidering =  Status::factory()->create(['name'=>'已成團','classes' => 'bg-blue text-white']);
 
     
     $idea = Idea::factory()->create([ 
          'user_id' =>$user->id,
         'title' => 'My First Idea',
         'category_id' => $categoryOne->id,
         'status_id' => $statusOpen->id,
         'description' => 'Description of my first idea',
     ]);


   $this->assertDatabaseMissing('votes',[
    'user_id' => $user->id,
    'idea_id'=> $idea->id,
   ]);
    



     Livewire::actingAs($user)
     ->test(IdeaShow::class,[
     'idea' => $idea,
      'votesCount' => 5,
     ])

  ->call('vote')
   ->assertSet('votesCount',6)
   ->assertSet('hasVoted',true)
   ->assertSee('已參加');

   $this->assertDatabasehas('votes',[
    'user_id' => $user->id,
    'idea_id'=> $idea->id,
   ]);
    

   
   

 });



