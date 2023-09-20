<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    protected $model = User::class;
    public function definition(): array
    {
        return [
            'first_name' => ucfirst($this->faker->words(1, true)),
            'last_name' => ucfirst($this->faker->words(1, true)),
            'phone' => $this->faker->e164PhoneNumber(),
            'avatar' => $this->faker->image(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            //
        ]);
    }
}
