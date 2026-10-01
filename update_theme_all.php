<?php

$files = glob('/Users/randi/WEB/RumahMakan/resources/views/frontend/*.blade.php');
$files[] = '/Users/randi/WEB/RumahMakan/resources/views/welcome.blade.php';

$replacements = [
    // Menu Categories
    'fa-coffee' => 'fa-fish',
    'Breakfast Time' => 'Menu Ikan Bakar',
    'Breakfast' => 'Ikan Bakar',
    
    'fa-utensils' => 'fa-water',
    'Lunch Time' => 'Aneka Seafood',
    'Lunch' => 'Seafood',
    
    'fa-hamburger' => 'fa-anchor',
    'Dinner Time' => 'Paket Kepiting',
    'Dinner' => 'Kepiting & Udang',
    
    'fa-ice-cream' => 'fa-leaf',
    'Desserts Time' => 'Menu Camilan',
    'Desserts' => 'Camilan',
    
    'fa-cocktail' => 'fa-glass-cheers',
    'Drink Time' => 'Minuman Segar',
    'Drink' => 'Minuman',

    // Menu Items
    "The Cracker Barrel's Country Boy Breakfast" => "Ikan Bakar Rica-Rica Spesial",
    "Uncle Herschel's Favorite" => "Kepiting Saus Padang Extra Pedas",
    "Grandpa's Country Fried Breakfast" => "Udang Goreng Tepung Crispy",
    "Old Timer's Meat Breakfast" => "Cumi Saus Tiram Manis",
    "Chinese Chicken Bread Spicy Soup" => "Kerang Dara Rebus Bumbu Nanas",
    
    'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum' => 'Hidangan lezat dengan bumbu racikan rahasia khas Ikan Karang.',
    'Order' => 'Pesan',

    // Chef Choice
    'Chef Choice' => 'Rekomendasi Koki',
    'Daily Special' => 'Spesial Hari Ini',
    
    // Testimonial
    'Our Customer Says' => 'Apa Kata Pelanggan Kami',

    // Chefs
    'Meet Our' => 'Kenali Kami',
    'Awesome Master Chefs' => 'Koki Ahli Kami',
    'Head Chef' => 'Koki Kepala',
];

foreach ($files as $file) {
    if (file_exists($file)) {
        $content = file_get_contents($file);
        
        foreach ($replacements as $search => $replace) {
            $content = str_replace($search, $replace, $content);
        }
        
        file_put_contents($file, $content);
    }
}

echo "Theme updated across all files successfully.\n";
