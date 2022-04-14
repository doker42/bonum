<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{


    protected $model = Post::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => rand(1,6),
            'user_id' => rand(1,2),
            'title' => $this->faker->text(20),
            'content'=> $this->faker->text(100),
            'status'=> 0,
        ];
    }
}
