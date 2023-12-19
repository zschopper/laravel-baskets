<?php

namespace Database\Factories;

use App\Models\Basket;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Basket>
 */
class BasketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $repeats = 10;
        do {
            $item_id = Product::all()->random()->item_id;
            $user_id = User::all()->random()->id;
            $repeats--;
        } while ($repeats >= 0 && Basket::find([$item_id, $user_id]));

        return [
            'item_id' => $item_id,
            'user_id' => $user_id,
        ];
    }
}
