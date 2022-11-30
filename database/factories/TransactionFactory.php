<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'concert' => rand(1,10),
            'user' => rand(1,10),
            'paid_at' => now()->format('Y-m-d'),
            'book_at' => now()->format('Y-m-d')
        ];
    }
}
