<?php

// namespace Tests\Unit;
namespace Tests\Feature;
use App\Models\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;


test('user_can_generate_gravatar_defualt_image_when_no_email_found',function()
{

 
    
    
        $user= User::factory()->create([
            'name' => 'liuliu',
            'email' => 'hk@hk.com'
            
            
        ]);
        $gravatarUrl = $user->getAvatar();
        // dd($gravatarUrl);

});

// test(' user_can_generate_gravatar_defualt_image_when_no_email_found',function(){
    //     $user= User::factory()->create([
        //                     'name' => 'liuliu',
        //                     'email' => 'hk@hk.com'
        
        
        //                 ]);
        //                 $gravatarUrl = $use->getAvatar();
        //                 // dd($gravatarUrl);
        
        // });
        
        
        
        