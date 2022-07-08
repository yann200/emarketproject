<?php

namespace Database\Factories;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $categorie_produit = ["T-shirt","Pantalon","Sweat","chaussure"];
        return [
            'disponibilite' => $this->faker->boolean(),
            'nom_produit' => $this->faker->name(),
            'categorie_produit' => $categorie_produit[array_rand([0,1,2,3])],
            'prix_produit' => $this->faker->optional($weight = 100)->randomDigit(),
            'desc_produit' => $this->faker->paragraph(),
            'image' => $this->faker->name(),
            'user_id'  => rand(1, User::count()), 
        ];
    }
}
