<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $makanan = Category::create(['name' => 'Makanan Utama', 'description' => 'Menu aneka ikan dan seafood']);
        $minuman = Category::create(['name' => 'Minuman', 'description' => 'Aneka minuman dingin dan panas']);
        $snack = Category::create(['name' => 'Camilan', 'description' => 'Menu pelengkap dan camilan']);

        $products = [
            ['category_id' => $makanan->id, 'name' => 'Ikan Bakar Rica', 'price' => 45000, 'description' => 'Ikan bakar dengan sambal rica pedas'],
            ['category_id' => $makanan->id, 'name' => 'Udang Saus Padang', 'price' => 55000, 'description' => 'Udang segar dimasak saus padang'],
            ['category_id' => $makanan->id, 'name' => 'Cumi Goreng Tepung', 'price' => 40000, 'description' => 'Cumi crispy dengan saus tartar'],
            ['category_id' => $makanan->id, 'name' => 'Kepiting Saus Tiram', 'price' => 85000, 'description' => 'Kepiting segar dengan saus tiram spesial'],
            
            ['category_id' => $minuman->id, 'name' => 'Es Teh Manis', 'price' => 5000, 'description' => 'Es teh manis segar'],
            ['category_id' => $minuman->id, 'name' => 'Es Jeruk', 'price' => 8000, 'description' => 'Es jeruk peras asli'],
            ['category_id' => $minuman->id, 'name' => 'Jus Alpukat', 'price' => 15000, 'description' => 'Jus alpukat kental'],
            ['category_id' => $minuman->id, 'name' => 'Es Kelapa Muda', 'price' => 12000, 'description' => 'Es kelapa muda utuh'],
            
            ['category_id' => $snack->id, 'name' => 'Tahu Isi Seafood', 'price' => 15000, 'description' => 'Tahu goreng isi sayur dan udang'],
            ['category_id' => $snack->id, 'name' => 'Kerupuk Ikan', 'price' => 5000, 'description' => 'Kerupuk ikan tenggiri asli'],
            ['category_id' => $snack->id, 'name' => 'Otak-otak Bakar', 'price' => 20000, 'description' => 'Otak-otak ikan bakar isi 5'],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
