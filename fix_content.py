import os
import re

files_to_fix = [
    'resources/views/welcome.blade.php',
    'resources/views/frontend/menu.blade.php',
    'resources/views/frontend/about.blade.php',
    'resources/views/frontend/contact.blade.php',
    'resources/views/frontend/reservation.blade.php',
    'resources/views/layouts/app.blade.php'
]

img_pattern = re.compile(r'<img\s+class="d-none d-lg-block"[^>]+subscribe-us\.png[^>]+>')
copy_pattern = re.compile(r'Restoran\.\s*</b>')

for file_path in files_to_fix:
    full_path = os.path.join('/Users/randi/WEB/Charlotte', file_path)
    if not os.path.exists(full_path): continue
    
    with open(full_path, 'r', encoding='utf-8') as f:
        content = f.read()

    # Apply fixes
    content = img_pattern.sub('', content)
    content = copy_pattern.sub('Charlotte.</b>', content)
        
    with open(full_path, 'w', encoding='utf-8') as f:
        f.write(content)

print("Content fixes applied successfully.")
