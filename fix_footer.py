import os
import re

files_to_fix = [
    'resources/views/welcome.blade.php',
    'resources/views/frontend/menu.blade.php',
    'resources/views/frontend/about.blade.php',
    'resources/views/frontend/contact.blade.php',
    'resources/views/frontend/reservation.blade.php',
    'resources/views/layouts/frontend.blade.php'
]

# Fix 1: Inject CSS Variables into the HEAD if they aren't there
head_pattern = re.compile(r'(</head>)', re.IGNORECASE)
head_replacement = r'<style>{!! \\App\\Helpers\\Settings::cssVariables() !!}</style>\n\1'

# Fix 2: Replace footer logo
# To prevent eating the entire body, we only match inside the footer block!
# Let's target the exact string instead of regex dotall.
old_footer_logo = '''<div class="logo">
                        <a href="{{ route('landing') }}">
                            <i class="fa fa-water me-3"></i>
                            <h1 class="mb-0">Restoran</h1>
                        </a>
                    </div>'''
new_footer_logo = '''<div class="logo" data-aos="fade-down-right">
                        <a href="{{ route('landing') }}">
                            <img src="{{ asset('assets') }}/images/logo.svg" alt="Charlotte" style="height: 60px; filter: drop-shadow(0px 2px 10px rgba(201,149,106,0.3));">
                        </a>
                    </div>'''

old_footer_logo2 = '''<div class="logo">
                        <a href="{{ route('landing') }}">
                            <i class="fa fa-water me-3"></i>
                            <h1 class="mb-0">Charlotte</h1>
                        </a>
                    </div>'''

# Fix 3: Replace Lorem Ipsum text in footer
lorem_pattern = re.compile(r'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua\. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat Duis aute irure dolor\.', re.DOTALL)
lorem_replacement = 'Charlotte menghadirkan pengalaman fine dining tak terlupakan dengan perpaduan keindahan estetika dan hidangan istimewa.'

for file_path in files_to_fix:
    full_path = os.path.join('/Users/randi/WEB/Charlotte', file_path)
    if not os.path.exists(full_path): continue
    
    with open(full_path, 'r', encoding='utf-8') as f:
        content = f.read()

    # Apply fixes
    if r'\App\Helpers\Settings::cssVariables()' not in content:
        content = head_pattern.sub(head_replacement, content)
        
    content = content.replace(old_footer_logo, new_footer_logo)
    content = content.replace(old_footer_logo2, new_footer_logo)
    content = lorem_pattern.sub(lorem_replacement, content)
        
    with open(full_path, 'w', encoding='utf-8') as f:
        f.write(content)

print("Footer fixes applied safely.")
