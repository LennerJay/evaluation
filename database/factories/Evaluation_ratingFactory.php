<?php

namespace Database\Factories;

// use App\Models\Question;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\evaluation_rating>
 */
class Evaluation_ratingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => null,
            'teacher_id' => null,
            'question_id' => null,
            'rating' => fake()->numberBetween(1,10)
        ];
    }
    // public function good(){
    //     return $this->state(function (array $artributes) {
    //         return [
    //             'rating' => fake()->numberBetween(4,5)
    //         ];
    //     });
    // }
    // public function average(){
    //     return $this->state(function (array $artributes) {
    //         return [
    //             'rating' => fake()->numberBetween(2,5)
    //         ];
    //     });
    // }
    // public function bad(){
    //     return $this->state(function (array $artributes) {
    //         return [
    //             'rating' => fake()->numberBetween(1,3)
    //         ];
    //     });
    // }
}
