<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\criteria>
 */
class CriteriaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'description' => null
        ];
    }
    public function Ts()
    {
        return $this->state(function (array $artributes){
            return [
                'description' => 'Teaching skills'
            ];
        });
    }
    public function Cm()
    {
        return $this->state(function (array $artributes){
            return [
                'description' => 'Classroom management'
            ];
        });
    }
    public function Cs()
    {
        return $this->state(function (array $artributes){
            return [
                'description' => 'Communication skills'
            ];
        });
    }
}
