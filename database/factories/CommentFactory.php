<?php

namespace Database\Factories;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    protected $model = Comment::class;

    public function definition(): array
    {
        return [
            'user_id' => null,
            'company_id' => null,
            'content' => ucfirst($this->faker->words(50, true)),
            'grades' => $this->faker->numberBetween(0, 10),
        ];
    }
}
