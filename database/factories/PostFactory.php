<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'=> $this->faker->sentence,
            'content'=> $this->faker->paragraph(3),
//            'status'=>$this->faker->randomElement(PostStatus::cases()),
            'user_id'=>$this->faker->numberBetween(1,50),
        ];
    }
}
