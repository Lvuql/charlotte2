import os
import re

files_to_fix = [
    'resources/views/frontend/menu.blade.php',
    'resources/views/frontend/about.blade.php',
    'resources/views/frontend/contact.blade.php',
    'resources/views/frontend/reservation.blade.php'
]

# 1. Fix Logo
logo_pattern = re.compile(r'<h1 class="mb-0 text-dark".*?>Charlotte</h1>')
logo_replacement = '<img src="{{ asset(\'assets\') }}/images/logo.svg" alt="Charlotte" class="logo-img" style="height: 45px;">'

# 2. Fix Login Icon (Desktop & Mobile)
icon_pattern1 = re.compile(r'<a class="text-decoration-none text-dark" href="#" data-bs-toggle="modal" data-bs-target="#authModal" title="Login / Register">\s*<i class="fa fa-user me-3"></i>\s*</a>')
icon_replacement1 = '<a class="text-decoration-none" href="#" data-bs-toggle="modal" data-bs-target="#loginModal" title="Login">\n                    <i class="fa fa-user me-3 text-dark"></i>\n                </a>'

icon_pattern2 = re.compile(r'<a class="text-decoration-none" href="#" data-bs-toggle="modal" data-bs-target="#authModal">\s*<i class="fa fa-user me-3 text-dark"></i>\s*</a>')
icon_replacement2 = '<a class="text-decoration-none" href="#" data-bs-toggle="modal" data-bs-target="#loginModal" title="Login">\n                        <i class="fa fa-user me-3 text-dark"></i>\n                    </a>'

for file_path in files_to_fix:
    full_path = os.path.join('/Users/randi/WEB/Charlotte', file_path)
    if not os.path.exists(full_path): continue
    
    with open(full_path, 'r', encoding='utf-8') as f:
        content = f.read()

    # Apply fixes
    content = logo_pattern.sub(logo_replacement, content)
    content = icon_pattern1.sub(icon_replacement1, content)
    content = icon_pattern2.sub(icon_replacement2, content)
    
    # Remove old authModal if exists to prevent duplicates
    # and inject new login-modal before closing body
    if '@include(\'components.login-modal\')' not in content:
        content = content.replace('</body>', '    @include(\'components.login-modal\')\n</body>')
        
    with open(full_path, 'w', encoding='utf-8') as f:
        f.write(content)

print("Files fixed successfully.")
