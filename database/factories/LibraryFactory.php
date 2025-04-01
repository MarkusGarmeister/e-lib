<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Library;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Library>
 */
class LibraryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Library::class;
    public function definition(): array
    {
        return [
            'name' => $this->faker->company,
            'creator_id' => User::factory(),
            'is_public' => $this->faker->boolean,
        ];
    }
}
