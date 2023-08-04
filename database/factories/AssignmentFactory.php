<?php

namespace Database\Factories;

use App\Models\Assignee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Assignment>
 */
class AssignmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->title(),
            'description' => $this->faker->text(),
            'assignee_id' => Assignee::pluck('id')->random(),
            'due_date'=> $this->faker->dateTime(),

        ];
    }
}
