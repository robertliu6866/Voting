<?php

namespace Tests\Feature;

use App\Http\Livewire\IdeaIndex;
use App\Http\Livewire\IdeasIndex;
use App\Models\Category;
use App\Models\Idea;
use App\Models\Status;
use App\Models\User;
use App\Models\Vote;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;
use Illuminate\Support\Facades\DB;


test('index_page_contains_idea_index_livewire_component',function()


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
    $this->get(route('idea.index'))
    ->assertSeeLivewire('idea-index');



});


test(' ideas_index_livewire_component_correctly_receives_votes_count',function()

{
    $user = User::factory()->create();
    $userB = User::factory()->create();



    $categoryOne = Category::factory()->create(['name'=> '百岳行程']);
   
 
   $statusOpen = Status::factory()->create(['name'=>'揪團中','classes' => 'bg-gray-200']);


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

    // 測試($ideas)上面是否votes_count == 2;

    Livewire:: test(IdeasIndex::class)
        ->assertViewHas('ideas', function ($ideas) {
            return $ideas->first()->votes_count == 2;
        });

});

// DB::listen(function ($query) {
//     // 记录查询的 SQL 语句
//     $sql = $query->sql;});






//已登入的使用者如果已對主意進行投票，則會顯示已投票
// test('user_who_is_logged_in_shows_voted_if_idea_already_voted_for',function()

//     {
//         //創造一個使用者
//         //創造一個想法
//         $user = User::factory()->create();
//         $idea = Idea::factory()->create();

//         Vote::factory()->create([
//             'idea_id' => $idea->id,
//             'user_id' => $user->id,
            
//         ]);

//         $idea->votes_count = 1;
//         $idea->voted_by_user = 1;

//         Livewire::actingAs($user)
//             ->test(IdeaIndex::class, [
//                 'idea' => $idea,
//                 'votesCount' => 5,
//             ])
//             ->assertSet('hasVoted', true)
//             ->assertSee('已參加');
//         });
        
        
           // 已登入的使用者可以移除對主意的投票測試
  
    // test('user_who_is_logged_in_can_remove_vote_for_idea',function()
   
    // {
    //     $user = User::factory()->create();
    //     $idea = Idea::factory()->create();

    //     Vote::factory()->create([
    //         'idea_id' => $idea->id,
    //         'user_id' => $user->id,
    //     ]);

    //     $idea->votes_count = 1;
    //     $idea->voted_by_user = 1;

    //     Livewire::actingAs($user)
    //         ->test(IdeaIndex::class, [
    //             'idea' => $idea,
    //             'votesCount' => 5,
    //         ])
    //         ->call('vote')
    //         ->assertSet('votesCount', 4)
    //         ->assertSet('hasVoted', false)
    //         ->assertSee('+1')
    //         ->assertDontSee('已參加');

    //     $this->assertDatabaseMissing('votes', [
    //         'user_id' => $user->id,
    //         'idea_id' => $idea->id,
    //     ]);
    // });








