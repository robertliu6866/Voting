<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Vote;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vote>
 */
class VoteFactory extends Factory
{
    protected $model =Vote::class;


 

    public function definition()
    {
        return [

            'idea_id' => $this->faker->numberBetween(1,100),
            'user_id' => $this->faker->numberBetween(1,20),
        ];
    }  
}
