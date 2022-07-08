<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Command;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produit = Product::factory()
        ->has(Command::factory()->count(3))
        ->count(4)
        ->create();
    }
}
