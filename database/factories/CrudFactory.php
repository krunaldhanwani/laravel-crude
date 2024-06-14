<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Crud>
 */
class CrudFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $email = fake()->email();
        $slug = $email . "-" . rand();
        return [
            'email' => $email,
            'slug' => Str::slug($slug), 
            'password' => fake()->password(),
        ];
    }
}
