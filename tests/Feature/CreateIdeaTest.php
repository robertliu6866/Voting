<?php

namespace Tests\Feature;

use App\Http\Livewire\CreateIdea;
use App\Models\Category;
use App\Models\Status;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;


 

     test('create_idea_form_does_not_show_when_logged_out',function()

    {
        $response = $this->get(route('idea.index'));

        $response->assertSuccessful();
        $response->assertSee('登入後新增想法');
        $response->assertDontSee('讓大家知道發起一個自組團行程');
    });




 test('create_idea_form_does_show_when_logged_in',function()
 
    {
        $response = $this->actingAs(User::factory()->create())->get(route('idea.index'));

        $response->assertSuccessful();
        $response->assertDontSee('登入後新增想法');
        $response->assertSee('讓大家知道發起一個自組團行程',false );
    });

    test('main_page_contains_create_idea_livewire_component',function()
  
    {
        $this->actingAs(User::factory()->create())
        ->get(route('idea.index'))
        ->assertSeeLivewire('create-idea');
       
       
    });

    test('create_idea_form_validation_works',function()


    {
        Livewire::actingAs(User::factory()->create())
        ->test(CreateIdea::class)
        ->set('title','')
        ->set('category','')
        ->set('description','')
         ->call('createIdea')
        ->assertHasErrors(['title','category','description' ]);
        // ->assertSee('填寫此懶位');
        
       
    });




    // test('creating_an_idea_works_correctly',function()
  
    // {
    //     $user = User::factory()->create();
   
    //     $categoryOne = Category::factory()->create(['name'=> '百岳行程']);
    //     $categoryTwo = Category::factory()->create(['name'=> '越野跑步行程']);
     
    // //    $statusOpen = Status::factory()->create(['name'=>'揪團中']);
    //    Livewire::actingAs($user)
    //    ->test(CreateIdea::class)
    //     ->set('title','Aliquam Ut Sed Tempora')
    //     ->set('category',$categoryOne->id)
    //     ->set('description','Nulla consequatur libero tempore qui error maxime perspiciatis. Eius neque optio doloribus consequuntur. Possimus facere itaque sint architecto aut possimus nisi. Quibusdam numquam maxime neque molestiae amet maiores.')
    //     ->call('createIdea')
    //     ->assertRedirect('/');
    // });



