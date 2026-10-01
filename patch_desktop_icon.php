<?php

$files = glob('/Users/randi/WEB/RumahMakan/resources/views/frontend/*.blade.php');

$desktopAdd = '
                @guest
                <a class="text-decoration-none text-dark" href="#" data-bs-toggle="modal" data-bs-target="#authModal" title="Login / Register">
                    <i class="fa fa-user me-3"></i>
                </a>
                @else
                <a class="text-decoration-none text-success" href="{{ route(\'admin.dashboard\') }}" title="Dashboard">
                    <i class="fa fa-user-check me-3"></i>
                </a>
                @endguest
';

foreach ($files as $file) {
    if (file_exists($file)) {
        $content = file_get_contents($file);
        
        // Ensure we don't add it twice
        if (strpos($content, 'data-bs-target="#authModal" title="Login') === false) {
            // Find the shoppingbag icon and insert the user icon after it
            $content = preg_replace(
                '/(<a class="text-decoration-none" id="shoppingbutton" href="#">\s*<i class="fa fa-shopping-bag me-3 text-dark"><\/i>\s*<\/a>)/i',
                "$1" . $desktopAdd,
                $content
            );
            file_put_contents($file, $content);
        }
    }
}

echo "Desktop icons patched successfully.\n";
