<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    protected $model = Company::class;

    public function definition(): array
    {
        return [
            'name' => ucfirst($this->faker->words(1, true)),
            'description' => ucfirst($this->faker->words(50, true)),
            'photo' => $this->faker->image(),
        ];
    }
}
