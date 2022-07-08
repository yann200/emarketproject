<?php

namespace Database\Factories;
use App\Models\User;
use App\Models\Message;
use Illuminate\Database\Eloquent\Factories\Factory;

class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_receveur' => rand(1, User::count()),
            'message' => $this->faker->text(),
        ];
    }
}
