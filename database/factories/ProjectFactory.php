<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->text,
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->date(),
            'url' => $this->faker->url,
            'repository_link' => $this->faker->url,
            'thumbnail' => $this->faker->imageUrl(),
        ];
    }
}
