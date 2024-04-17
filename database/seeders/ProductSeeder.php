<?php

namespace Database\Seeders;
use App\Models\Product;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            ['name' => 'Produs 1', 'image' => asset('product_images/img1.png'), 'purchase_url' => 'url1', 'company' => 'Company A', 'description' => 'Descrierea produsului 1', 'price' => 100],
            ['name' => 'Produs 2', 'image' => asset('product_images/img2.png'), 'purchase_url' => 'url2', 'company' => 'Company B', 'description' => 'Descrierea produsului 2', 'price' => 150],
            ['name' => 'Produs 3', 'image' => asset('product_images/img3.png'), 'purchase_url' => 'url3', 'company' => 'Company B', 'description' => 'Descrierea produsului 3', 'price' => 200],
            ['name' => 'Produs 4', 'image' => asset('product_images/img4.png'), 'purchase_url' => 'url4', 'company' => 'Company A', 'description' => 'Descrierea produsului 4', 'price' => 100],
            ['name' => 'Produs 5', 'image' => asset('product_images/img5.png'), 'purchase_url' => 'url5', 'company' => 'Company B', 'description' => 'Descrierea produsului 5', 'price' => 150],
            ['name' => 'Produs 6', 'image' => asset('product_images/img6.png'), 'purchase_url' => 'url6', 'company' => 'Company B', 'description' => 'Descrierea produsului 6', 'price' => 200],
            ['name' => 'Produs 7', 'image' => asset('product_images/img7.png'), 'purchase_url' => 'url7', 'company' => 'Company A', 'description' => 'Descrierea produsului 7', 'price' => 100],
            ['name' => 'Produs 8', 'image' => asset('product_images/img8.png'), 'purchase_url' => 'url8', 'company' => 'Company B', 'description' => 'Descrierea produsului 8', 'price' => 150],
            ['name' => 'Produs 9', 'image' => asset('product_images/img9.png'), 'purchase_url' => 'url9', 'company' => 'Company B', 'description' => 'Descrierea produsului 9', 'price' => 200],

            // Adaugă mai multe produse aici...
        ];
        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
