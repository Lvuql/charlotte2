<?php

$file = '/Users/randi/WEB/RumahMakan/resources/views/welcome.blade.php';
$content = file_get_contents($file);

$replacements = [
    // Hero
    'Enjoy Our <br> Delicious Meal' => 'Sajian Laut <br> & Ikan Bakar Segar',
    'Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et
                        eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet' => 'Rasakan sensasi hidangan laut segar khas nusantara dengan bumbu rempah pilihan, ditangkap langsung oleh nelayan lokal setiap harinya.',
    'Book a table' => 'Pesan Meja',

    // About Us
    'Welcome to <i class="fa fa-utensils  me-2"></i>Restoran' => 'Selamat Datang di <i class="fa fa-water me-2 text-primary"></i>Ikan Karang',
    'Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et
                        eos erat ipsum et lorem et sit, sed stet lorem sit.' => 'Rumah Makan Ikan Karang telah menjadi pilihan utama keluarga untuk menikmati hidangan laut segar dengan kualitas terbaik.',
    '15' => '10',
    'Years of' => 'Tahun',
    'Experience' => 'Pengalaman',
    '50' => '25',
    'Popular' => 'Koki',
    'Master Chefs' => 'Andalan',
    'Read More' => 'Selengkapnya',

    // Menu Categories
    'Our Menu' => 'Menu Spesial',
    'Tasty And Good Price' => 'Harga Terjangkau & Rasa Lezat',
    
    'fa-coffee' => 'fa-fish',
    'Breakfast' => 'Ikan Bakar',
    
    'fa-utensils' => 'fa-water',
    'Lunch' => 'Seafood',
    
    'fa-hamburger' => 'fa-anchor',
    'Dinner' => 'Kepiting & Udang',
    
    'fa-ice-cream' => 'fa-leaf',
    'Desserts' => 'Camilan',
    
    'fa-cocktail' => 'fa-glass-cheers',
    'Drink' => 'Minuman',

    // Menu Items
    "The Cracker Barrel's Country Boy Breakfast" => "Ikan Bakar Rica-Rica Spesial",
    "Uncle Herschel's Favorite" => "Kepiting Saus Padang Extra Pedas",
    "Grandpa's Country Fried Breakfast" => "Udang Goreng Tepung Crispy",
    "Old Timer's Meat Breakfast" => "Cumi Saus Tiram Manis",
    "Chinese Chicken Bread Spicy Soup" => "Kerang Dara Rebus Bumbu Nanas",
    
    'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum' => 'Hidangan lezat dengan bumbu racikan rahasia khas Ikan Karang.',
    'Order' => 'Pesan',

    // Testimonial
    'Our Customer Says' => 'Apa Kata Pelanggan Kami',

    // Chefs
    'Meet Our' => 'Kenali Kami',
    'Awesome Master Chefs' => 'Koki Ahli Kami',
    'Head Chef' => 'Koki Kepala',
];

foreach ($replacements as $search => $replace) {
    $content = str_replace($search, $replace, $content);
}

file_put_contents($file, $content);
echo "Theme updated successfully.\n";
