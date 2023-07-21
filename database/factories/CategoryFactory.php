<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class CategoryFactory extends Factory
{
 protected $model = Category::class;

public function definition(){
    return [
        'name' => $this->faker->words(2,true),
    ];

}

}
