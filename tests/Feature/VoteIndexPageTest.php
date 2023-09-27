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

    Livewire:: test(IdeasIndex::class)
        ->assertViewHas('ideas', function ($ideas) {
            return $ideas->first()->votes_count == 2;
        });

});











// });



// //計票。 在顯示頁面 Livewire 組件上正確顯示
// test('votes_count_shows_correctly_on_index_page_livewire_component',function()

 
// {

//     $idea = Idea::factory()->create();

//     Livewire::test(IdeaIndex::class, [
//         'idea' => $idea,
//         'votesCount' => 5,
//     ])
//     ->assertSet('votesCount', 5);
  

// });



