<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Product;
use App\Models\Interest;

use Illuminate\Database\Eloquent\Factories\Factory;

class InterestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->rand(1, User::count()),
            'product_id' => $this->rand(1, Product::count()),
            
        ];
    }
}
