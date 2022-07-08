<?php

namespace Database\Factories;
use App\Models\Command;
use App\Models\User;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' =>rand(1, User::count()),
            'product_id' =>rand(1, Product::count()),
        ];
    }
}
