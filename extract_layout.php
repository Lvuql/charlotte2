<?php

$welcomeFile = '/Users/randi/WEB/RumahMakan/resources/views/welcome.blade.php';
$content = file_get_contents($welcomeFile);

// Split at <main> and </main>
$parts = explode('<main>', $content);
$headerPart = $parts[0] . '<main>';
$rest = explode('</main>', $parts[1]);
$mainPart = $rest[0];
$footerPart = '</main>' . $rest[1];

// Create layouts/frontend.blade.php
$layoutContent = $headerPart . "\n    @yield('content')\n" . $footerPart;
file_put_contents('/Users/randi/WEB/RumahMakan/resources/views/layouts/frontend.blade.php', $layoutContent);

// Update welcome.blade.php to extend layouts.frontend
$newWelcomeContent = "@extends('layouts.frontend')\n@section('content')\n" . $mainPart . "\n@endsection";
file_put_contents('/Users/randi/WEB/RumahMakan/resources/views/welcome.blade.php', $newWelcomeContent);

// Do the same for all other frontend files
$frontendDir = '/Users/randi/WEB/RumahMakan/resources/views/frontend';
$files = glob($frontendDir . '/*.blade.php');
foreach ($files as $file) {
    $c = file_get_contents($file);
    if (strpos($c, '<main>') !== false) {
        $p = explode('<main>', $c);
        $r = explode('</main>', $p[1]);
        $newC = "@extends('layouts.frontend')\n@section('content')\n" . $r[0] . "\n@endsection";
        file_put_contents($file, $newC);
    }
}

// Now update layouts/app.blade.php to match the frontend layout so Auth and Admin pages match the theme!
file_put_contents('/Users/randi/WEB/RumahMakan/resources/views/layouts/app.blade.php', $layoutContent);

echo "Layout extraction complete.\n";
