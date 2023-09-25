<?php
// namespace Tests\Feature;
namespace Tests\Feature;
use App\Exceptions\DuplicateVoteException;
use App\Exceptions\VoteNotFoundException;
use App\Http\Livewire\IdeaIndex;
use App\Models\Category;
use App\Models\Idea;
use App\Models\Status;
use App\Models\User;
use App\Models\Vote;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

// class IdeaTest extends TestCase{

    
    //可以檢查想法是否被使用投票
    
    test('user_can_vote_for_idea',function()
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
        $this->assertFalse($idea->isVotedByUser($user));
        $idea->vote($user);
        $this->assertTrue($idea->isVotedByUser($user));
        
        
 
        
   
    
    });


    test('user_can_remove_vote_for_idea',function()
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


        $this->assertTrue($idea->isVotedByUser($user));
        $idea->removeVote($user);
        $this->assertFalse($idea->isVotedByUser($user));
        
        
 
        
   
    
    });


    test('voting_for_an_idea_thats_already_voted_for_throws_exception',function()
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

             $this->expectException(DuplicateVoteException::class);

    
        $idea->vote($user);

    });



    // test('can_check_if_idea_is_voted_for_by_user',function()
    // {
 
    //     $user = User::factory()->create();
    //     $userB = User::factory()->create();
    //     $categoryOne = Category::factory()->create(['name'=> '百岳行程']);
    //     $categoryTwo = Category::factory()->create(['name'=> '越野跑步行程']);
        
    //     $statusOpen = Status::factory()->create(['name'=>'揪團中','classes' => 'bg-gray-200']);
    //     $statusConidering =  Status::factory()->create(['name'=>'已成團','classes' => 'bg-blue text-white']);
        
        
    //     $idea = Idea::factory()->create([ 
    //         'user_id' =>$user->id,
    //         'title' => 'My First Idea',
    //         'category_id' => $categoryOne->id,
    //         'status_id' => $statusOpen->id,
    //         'description' => 'Description of my first idea',
    //     ]);
        
    //     Vote::factory()->create([
    //         'idea_id' => $idea->id,
    //         'user_id' => $user->id,
            
    //     ]);
    //     //這個測試是在確保對 $idea 物件呼叫 isVotedByUser 方法並傳入 $user 物件時，方法的回傳值為真。這代表該使用者對該想法已經投過票。
    //     $this->assertTrue($idea->isVotedByUser($user));
    //     $this->assertFalse($idea->isVotedByUser($userB));
    //     $this->assertFalse($idea->isVotedByUser(null));
        
        

    
    // });

