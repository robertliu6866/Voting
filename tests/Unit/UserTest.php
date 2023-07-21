<?php

namespace Tests\Unit;
use App\Model\User;
use PHPUnit\Framework\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     */
    public function user_can_generate_gravatar_defualt_image_when_no_email_found()
    {
        $user= User::factory()->create([
            'name' => 'liuliu',
            'email' => 'hk@hk.com'


        ]);
        $gravatarUrl = $use->getAvatar();
        // dd($gravatarUrl);
    }
}
