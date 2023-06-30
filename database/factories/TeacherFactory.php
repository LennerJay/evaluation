<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'department' => null
        ];
    }
    public function BSIT()
    {
        return $this->state(function(array $attributes){
            return ['department' => 'BSIT'];
        });
    }
    public function BEED()
    {
        return $this->state(function(array $attributes){
            return ['department' => 'BEED'];
        });
    }
    public function BSHRM()
    {
        return $this->state(function(array $attributes){
            return ['department' => 'BSHRM'];
        });
    }
}
