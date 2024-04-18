<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::factory(10)->create();

        $products = Product::select('id')->get();

        foreach ($products as $product) {
            $product
                ->addMediaFromUrl(fake()->imageUrl())
                ->toMediaCollection('products');
        }
    }
}
