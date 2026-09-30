<?php

$srcDir = '/Users/randi/WEB/RumahMakan/Restoran-master';
$destDir = '/Users/randi/WEB/RumahMakan/resources/views/frontend';

if (!is_dir($destDir)) {
    mkdir($destDir, 0755, true);
}

$files = glob($srcDir . '/*.html');

foreach ($files as $file) {
    $content = file_get_contents($file);
    // Replace ./assets with {{ asset('assets') }}
    $content = str_replace('./assets', "{{ asset('assets') }}", $content);
    
    // Replace href="./filename.html" with href="{{ route('frontend.filename') }}" (except index)
    $content = preg_replace('/href="\.\/index\.html"/', 'href="{{ route(\'landing\') }}"', $content);
    $content = preg_replace('/href="\.\/about\.html"/', 'href="{{ route(\'about\') }}"', $content);
    $content = preg_replace('/href="\.\/menu\.html"/', 'href="{{ route(\'menu\') }}"', $content);
    $content = preg_replace('/href="\.\/reservation\.html"/', 'href="{{ route(\'reservation\') }}"', $content);
    $content = preg_replace('/href="\.\/contact\.html"/', 'href="{{ route(\'contact\') }}"', $content);

    // Save as blade file
    $baseName = basename($file, '.html');
    if ($baseName === 'index') {
        // We will overwrite welcome.blade.php directly later or we can write to frontend/index.blade.php
        file_put_contents('/Users/randi/WEB/RumahMakan/resources/views/welcome.blade.php', $content);
    } else {
        file_put_contents($destDir . '/' . $baseName . '.blade.php', $content);
    }
}

echo "Conversion complete.\n";
