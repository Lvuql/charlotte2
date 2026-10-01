<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Charlotte &amp; Hugo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css" />
    <style>
        header.scrolled .menus>ul>li::after {
            background-color: var(--text-color-white);
        }
    </style>
</head>

<body>

    <div class="loader">
        <i class="fas fa-utensils loader-icone"></i>
        <p style="font-family: serif; letter-spacing: 4px; font-size: 1.5rem;">CHARLOTTE &amp; HUGO</p>
        <div class="loader-ellipses">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    <header>
        <div class="container header my-3 d-none d-lg-flex">
            <div class="logo">
                <a href="{{ route('landing') }}">
                    <i class="fa fa-utensils me-3"></i>
                    <h1 class="mb-0" style="font-family: serif; font-weight: 300; letter-spacing: 2px; font-size: 1.4rem;">CHARLOTTE &amp; HUGO</h1>
                </a>
            </div>
            <div class="menus">
                <ul class="d-flex mb-0">
                    <li class="list-unstyled py-2">
                        <a class="text-decoration-none text-uppercase p-4" href="{{ route('landing') }}">Home</a>
                    </li>
                    <li class="list-unstyled py-2">
                        <a class="text-decoration-none text-uppercase p-4" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="list-unstyled py-2">
                        <a class="text-decoration-none text-uppercase p-4"
                            href="{{ route('reservation') }}">Reservation</a>
                    </li>
                    <li class="list-unstyled py-2">
                        <a class="text-decoration-none text-uppercase p-4" href="{{ route('menu') }}">Menu</a>
                    </li>
                    <li class="list-unstyled py-2">
                        <a class="text-decoration-none text-uppercase p-4" href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="icons">
                <a class="text-decoration-none" id="searchBtn" href="#">
                    <i class="fa fa-search me-3"></i>
                </a>
                <a class="text-decoration-none" id="shoppingbutton" href="#">
                    <i class="fa fa-shopping-bag me-3"></i>
                </a>
                @guest
                <a class="text-decoration-none text-white" href="#" data-bs-toggle="modal" data-bs-target="#authModal" title="Login / Register">
                    <i class="fa fa-user me-3"></i>
                </a>
                @else
                <a class="text-decoration-none text-success" href="{{ route('admin.dashboard') }}" title="Dashboard">
                    <i class="fa fa-user-check me-3"></i>
                </a>
                @endguest
            </div>
        </div>

        <div class="d-flex justify-content-around py-3 align-items-center d-lg-none">
            <div id="hamburger">
                <i class="fa fa-2x fa-bars me-3 text-white"></i>
            </div>
            <div class="mobile-nav-logo">
                <div class="logo">
                    <a href="{{ route('landing') }}">
                        <i class="fa fa-utensils me-3"></i>
                        <h1 class="mb-0" style="font-family: serif; font-weight: 300; letter-spacing: 2px; font-size: 1.4rem;">CHARLOTTE &amp; HUGO</h1>
                    </a>
                </div>
            </div>
            <div class="mobile-nav-icons">
                <div class="icons">
                    <a class="text-decoration-none" id="searchBtnMobile" href="#">
                        <i class="fa fa-search me-3"></i>
                    </a>
                    <a class="text-decoration-none" id="shoppingbuttonMobile" href="#">
                        <i class="fa fa-shopping-bag me-3"></i>
                    </a>
                    @guest
                    <a class="text-decoration-none" href="#" data-bs-toggle="modal" data-bs-target="#authModal">
                        <i class="fa fa-user me-3"></i>
                    </a>
                    @else
                    <a class="text-decoration-none text-success" href="{{ route('admin.dashboard') }}">
                        <i class="fa fa-user-check me-3"></i>
                    </a>
                    @endguest
                </div>
            </div>
            <div class="position-fixed w-75 bg-white h-100 top-0 start-0" id="mobile-menu">
                <div id="hamburger-cross" class="d-flex justify-content-end align-items-center py-2">
                    <i class="fa fa-2x fa-plus me-3 "></i>
                </div>
                <div class="menus">
                    <ul class="d-flex flex-column ps-2 mb-0 mt-4">
                        <li class="list-unstyled py-2">
                            <a class="text-dark text-decoration-none text-uppercase p-4" href="#">Home</a>
                        </li>
                        <li class="list-unstyled py-2">
                            <a class="text-dark text-decoration-none text-uppercase p-4"
                                href="{{ route('about') }}">About</a>
                        </li>
                        <li class="list-unstyled py-2">
                            <a class="text-dark text-decoration-none text-uppercase p-4"
                                href="{{ route('reservation') }}">Reservation</a>
                        </li>
                        <li class="list-unstyled py-2">
                            <a class="text-dark text-decoration-none text-uppercase p-4"
                                href="{{ route('menu') }}">Menu</a>
                        </li>
                        <li class="list-unstyled py-2">
                            <a class="text-dark text-decoration-none text-uppercase p-4"
                                href="{{ route('contact') }}">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <div class="search-bar d-none" id="search-container">
        <div class="close-btn" id="search-close-btn">
            <i class="fa fa-close"></i>
        </div>
        <div class="search-bar-wrapper">
            <input type="search" placeholder="Enter any text here..." />
            <div class="search-button">
                <a href="#"><i class="fa fa-search"></i></a>
            </div>
        </div>
    </div>

    <div class="shopping-cart">
        <div class="shopping-cart-header d-flex justify-content-between">
            <h2>Review your Cart</h2>
            <i class="fa fa-close"></i>
        </div>
        <div class="shopping-cart-body">
            <div class="row shopping-cart-item d-flex justify-content-between">
                <div class="col-2 d-flex align-items-center">
                    <img src="{{ asset('assets') }}/images/product-2a.jpg" alt="">
                </div>
                <div class="col-8">
                    <h3>French Chicken Ballotine</h3>
                    <div class="shopping-cart-counter">
                        <i class="fa fa-minus"></i>
                        <span>1</span>
                        <i class="fa fa-plus"></i>
                    </div>
                </div>
                <div class="col-2 item-price d-flex align-items-end">
                    <p class="mb-0 text-center">Rp 63K</p>
                </div>
            </div>
            <div class="row shopping-cart-item d-flex justify-content-between">
                <div class="col-2 d-flex align-items-center">
                    <img src="{{ asset('assets') }}/images/product-2b.jpg" alt="">
                </div>
                <div class="col-8">
                    <h3>Matcha Brûlée Cheesecake</h3>
                    <div class="shopping-cart-counter">
                        <i class="fa fa-minus"></i>
                        <span>1</span>
                        <i class="fa fa-plus"></i>
                    </div>
                </div>
                <div class="col-2 item-price d-flex align-items-end">
                    <p class="mb-0 text-center">Rp 49K</p>
                </div>
            </div>
            <div class="row shopping-cart-item d-flex justify-content-between">
                <div class="col-2 d-flex align-items-center">
                    <img src="{{ asset('assets') }}/images/product-2c.jpg" alt="">
                </div>
                <div class="col-8">
                    <h3>Salmon Steak</h3>
                    <div class="shopping-cart-counter">
                        <i class="fa fa-minus"></i>
                        <span>1</span>
                        <i class="fa fa-plus"></i>
                    </div>
                </div>
                <div class="col-2 item-price d-flex align-items-end">
                    <p class="mb-0 text-center">Rp 63K</p>
                </div>
            </div>
            <div class="row shopping-cart-item d-flex justify-content-between">
                <div class="col-2 d-flex align-items-center">
                    <img src="{{ asset('assets') }}/images/product-2d.jpg" alt="">
                </div>
                <div class="col-8">
                    <h3>Balinese Chicken Betutu</h3>
                    <div class="shopping-cart-counter">
                        <i class="fa fa-minus"></i>
                        <span>1</span>
                        <i class="fa fa-plus"></i>
                    </div>
                </div>
                <div class="col-2 item-price d-flex align-items-end">
                    <p class="mb-0 text-center">Rp 45K</p>
                </div>
            </div>
        </div>
        <div class="shopping-cart-footer">
            <div class="d-flex justify-content-between px-3 py-2">
                <div>
                    <h2 class="mb-0">Subtotal</h2>
                    <p class="mb-0">Shipping & taxes calculated at checkout</p>
                </div>
                <div class="d-flex align-items-end">
                    <p class="footet-total-price mb-0">Rp 277K</p>
                </div>
            </div>
            <div class="d-flex justify-content-between px-2">
                <div class="footer-checkout">
                    <div class="anim-layer"></div>
                    <a href="#">Checkout</a>
                </div>
                <div class="footer-shopping">
                    <div class="anim-layer"></div>
                    <a href="#">Continue Shopping</a>
                </div>
            </div>
        </div>
    </div>

    <main>
        @yield('content')
    </main>


    <a href="#" id="back-to-top">
        <i class="fa-solid fa-angles-up"></i>
    </a>


    <footer>
        <div class="container">
            <div class="row">
                <div class="footer-content col-xl-8  px-4">
                    <div class="row">
                        <div class="col-lg-6 px-0">
                            <div class="logo" data-aos="fade-down-right">
                                <a href="{{ route('landing') }}">
                                    <i class="fa fa-utensils me-3"></i>
                                    <h1 class="mb-0" style="font-family: serif; font-weight: 300; letter-spacing: 2px; font-size: 1.4rem;">CHARLOTTE &amp; HUGO</h1>
                                </a>
                            </div>
                        </div>
                        <div data-aos="fade-down"
                            class="col-lg-6 pt-4 pt-lg-0 d-flex align-items-center justify-content-start justify-content-lg-end">
                            <div class="social-icons d-flex">
                                <ul class="d-flex mb-0 ps-0">
                                    <li class="mx-2"><a class="text-decoration-none text-white" href="#"><i
                                                class="fab fa-facebook"></i></a></li>
                                    <li class="mx-2"><a class="text-decoration-none text-white" href="#"><i
                                                class="fab fa-twitter"></i></a></li>
                                    <li class="mx-2"><a class="text-decoration-none text-white" href="#"><i
                                                class="fab fa-pinterest"></i></a></li>
                                    <li class="mx-2"><a class="text-decoration-none text-white" href="#"><i
                                                class="fab fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-5 content-desc" data-aos="fade-right">
                        <p class="px-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat Duis aute irure dolor.
                        </p>
                    </div>
                    <div class="row" data-aos="fade-right">
                        <div class="d-flex flex-column flex-lg-row px-0 justify-content-between">
                            <div class="location d-flex align-items-center pe-2 py-3">
                                <i class="fa-solid fa-location-dot text-white fa-2x border-bottom pb-2"></i>
                                <div class="ps-3">
                                    <p class="mb-0">
                                        Jl. Purus 1 No. 1F <br>
                                        Kota Padang
                                    </p>
                                </div>
                            </div>
                            <div class="location d-flex align-items-center pe-2 py-3">
                                <i class="fa-solid fa-mobile text-white fa-2x border-bottom pb-2"></i>
                                <div class="ps-3">
                                    <p class="mb-0">
                                        (0822) 8513-3014 <br>
                                        (0822) 8513-3014
                                    </p>
                                </div>
                            </div>
                            <div class="location d-flex align-items-center pe-2 py-3">
                                <i class="fa-solid fa-envelope text-white fa-2x border-bottom pb-2"></i>
                                <div class="ps-3">
                                    <p class="mb-0">
                                        charlotte.hugo.padang@gmail.com <br>
                                        Info &amp; Reservasi: 0822-8513-3014
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="reservation-box" data-aos="fade-down-left">
                        <div class="reservation-wrapper">
                            <h2>Open Hour</h2>
                            <div class="reservation-date-time">
                                <p>Tuesday: .......................... 7AM - 9PM</p>
                                <p>Wednesday: ..................... 7AM - 9PM</p>
                                <p>Thursday: ......................... 7AM - 9PM</p>
                                <p>Friday: ............................... 7AM - 9PM</p>
                                <p>Saturday: ........................... 7AM - 9PM</p>
                                <p>Sunday: ............................. 7AM - 9PM</p>
                                <p>Monday: ............................. Close</p>
                            </div>
                            <h2 class="pb-2">Reservation Numbers</h2>
                            <h3>(0822) 8513-3014</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <p class="text-center pt-4 mt-3 pt-lg-0">&copy; <span id="copyrightCurrentYear"></span> <b>
                        Restoran.</b> All rights reserved. Design by <a
                        href="https://www.linkedin.com/in/codewithshabbir/" class="fw-bold author-name">Randi
                        Fadillah</a></p>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="{{ asset('assets') }}/js/script.js"></script>

    <!-- Auth Modal Pop-up -->
    <div class="modal fade" id="authModal" tabindex="-1" aria-labelledby="authModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg" style="border-radius: 15px; overflow:hidden;">
          <div class="modal-header border-0 bg-light pb-0">
            <ul class="nav nav-tabs border-0" id="authTab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active fw-bold text-dark border-0 bg-transparent" id="login-tab" data-bs-toggle="tab" data-bs-target="#login-pane" type="button" role="tab">Masuk</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link fw-bold text-muted border-0 bg-transparent" id="register-tab" data-bs-toggle="tab" data-bs-target="#register-pane" type="button" role="tab">Daftar</button>
              </li>
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body p-4 p-md-5">
            <div class="tab-content" id="authTabContent">
              
              <!-- Login Tab -->
              <div class="tab-pane fade show active" id="login-pane" role="tabpanel">
                <div class="text-center mb-4">
                  <h4 class="fw-bold mb-1">Selamat Datang</h4>
                  <p class="text-muted small">Silakan masuk ke akun Anda</p>
                </div>
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    @if($errors->has('email') && old('name') == null)
                        <div class="alert alert-danger py-2 small">{{ $errors->first('email') }}</div>
                    @endif
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" name="email" id="loginEmail" placeholder="name@example.com" value="{{ old('email') }}" required>
                        <label for="loginEmail">Alamat Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" name="password" id="loginPassword" placeholder="Password" required>
                        <label for="loginPassword">Kata Sandi</label>
                    </div>
                    <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" name="remember" id="rememberMe">
                        <label class="form-check-label text-muted small" for="rememberMe">Ingat saya</label>
                    </div>
                    <button type="submit" class="btn w-100 py-2 mb-3" style="background-color: var(--primary-color, #e65100); color: white; border-radius: 30px; font-weight: bold;">Masuk</button>
                    
                    <div class="position-relative mb-3 text-center">
                        <hr>
                        <span class="position-absolute top-50 start-50 translate-middle bg-white px-2 text-muted small">atau</span>
                    </div>
                    
                    <a href="{{ route('google.login') }}" class="btn btn-outline-dark w-100 py-2 d-flex align-items-center justify-content-center gap-2" style="border-radius: 30px; font-weight: bold;">
                        <i class="fab fa-google text-danger"></i> Masuk dengan Google
                    </a>
                </form>
              </div>

              <!-- Register Tab -->
              <div class="tab-pane fade" id="register-pane" role="tabpanel">
                <div class="text-center mb-4">
                  <h4 class="fw-bold mb-1">Buat Akun Baru</h4>
                  <p class="text-muted small">Bergabunglah dengan Charlotte &amp; Hugo</p>
                </div>
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    @if($errors->any() && old('name') != null)
                        <div class="alert alert-danger py-2 small">{{ $errors->first() }}</div>
                    @endif
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="name" id="regName" placeholder="Nama Lengkap" value="{{ old('name') }}" required>
                        <label for="regName">Nama Lengkap</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" name="email" id="regEmail" placeholder="name@example.com" value="{{ old('email') }}" required>
                        <label for="regEmail">Alamat Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" name="password" id="regPassword" placeholder="Password" required>
                        <label for="regPassword">Kata Sandi</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="password" class="form-control" name="password_confirmation" id="regConfirmPassword" placeholder="Konfirmasi Password" required>
                        <label for="regConfirmPassword">Konfirmasi Sandi</label>
                    </div>
                    <button type="submit" class="btn w-100 py-2 mb-3" style="background-color: var(--primary-color, #e65100); color: white; border-radius: 30px; font-weight: bold;">Daftar Akun</button>
                    
                    <div class="position-relative mb-3 text-center">
                        <hr>
                        <span class="position-absolute top-50 start-50 translate-middle bg-white px-2 text-muted small">atau</span>
                    </div>
                    
                    <a href="{{ route('google.login') }}" class="btn btn-outline-dark w-100 py-2 d-flex align-items-center justify-content-center gap-2" style="border-radius: 30px; font-weight: bold;">
                        <i class="fab fa-google text-danger"></i> Daftar dengan Google
                    </a>
                </form>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
    
    @if($errors->any())
    <script>
      document.addEventListener("DOMContentLoaded", function() {
          var authModal = new bootstrap.Modal(document.getElementById('authModal'));
          authModal.show();
          
          @if(old('name'))
             var triggerEl = document.querySelector('#register-tab')
             if (bootstrap.Tab.getInstance(triggerEl)) {
                 bootstrap.Tab.getInstance(triggerEl).show();
             } else {
                 new bootstrap.Tab(triggerEl).show();
             }
          @endif
      });
    </script>
    @endif
</body>

</html>
