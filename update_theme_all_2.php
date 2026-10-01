<?php

$files = glob('/Users/randi/WEB/RumahMakan/resources/views/frontend/*.blade.php');
$files[] = '/Users/randi/WEB/RumahMakan/resources/views/welcome.blade.php';

$replacements = [
    // Menu Page Specific
    'The various dishes are waiting for your coming to enjoy its' => 'Berbagai hidangan lezat siap memanjakan lidah Anda.',
    'Review your Cart' => 'Keranjang Pesanan Anda',
    'Subtotal' => 'Subtotal',
    'Shipping & taxes calculated at checkout' => 'Pajak akan dihitung saat pembayaran',
    'Checkout' => 'Bayar Sekarang',
    'Continue Shopping' => 'Pilih Menu Lain',
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

echo "Theme extended successfully.\n";
