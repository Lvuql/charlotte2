<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Charlotte & Hugo – Fine Dining di Padang</title>
    <meta name="description" content="Charlotte & Hugo – Nikmati pengalaman fine dining terbaik di Padang dengan menu Western & Asian yang eksklusif. Reservasi: 0822-8513-3014." />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css" />
    <style>
        header.scrolled .menus>ul>li::after {
            background-color: var(--accent-color);
        }

        /* Charlotte & Hugo Brand Overrides */
        .logo h1 {
            font-family: 'Cormorant Garamond', serif !important;
            font-weight: 300 !important;
            font-size: 1.8rem !important;
            letter-spacing: 3px;
            color: var(--text-color-white) !important;
        }

        .logo-sub {
            font-family: 'Cormorant Garamond', serif;
            font-size: 0.65rem;
            letter-spacing: 4px;
            text-transform: uppercase;
            color: var(--accent-color);
            display: block;
            margin-top: -6px;
            font-weight: 300;
        }

        .logo a {
            flex-direction: column !important;
            align-items: flex-start !important;
            gap: 0 !important;
        }

        .logo a i {
            display: none;
        }

        .nav-brand-wrapper {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .nav-divider {
            width: 1px;
            height: 35px;
            background: rgba(255,255,255,0.3);
        }

        .header-phone {
            font-family: 'Cormorant Garamond', serif;
            font-size: 0.75rem;
            letter-spacing: 1px;
            color: var(--accent-color);
        }

        .header-phone i {
            margin-right: 4px;
        }
    </style>
</head>

<body>

    <div class="loader">
        <i class="fas fa-star loader-icone" style="animation: pulse-gold 1.5s ease-in-out infinite;"></i>
        <p style="font-family: 'Cormorant Garamond', serif; font-weight: 300; letter-spacing: 8px; font-size: 2rem; color: var(--primary-color);">CHARLOTTE</p>
        <span style="font-family: 'Cormorant Garamond', serif; font-size: 0.75rem; letter-spacing: 5px; color: var(--secondary-color);">& HUGO</span>
        <div class="loader-ellipses" style="margin-top: 16px;">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    <header>
        <div class="container header my-3 d-none d-lg-flex">
            <div class="nav-brand-wrapper">
                <div class="logo">
                    <a href="{{ route('landing') }}">
                        <h1 class="mb-0">CHARLOTTE <span style="font-style: italic; font-weight: 300;">&</span> HUGO</h1>
                        <span class="logo-sub">Fine Dining · Padang</span>
                    </a>
                </div>
                <div class="nav-divider"></div>
                <div class="header-phone d-none d-xl-block">
                    <i class="fas fa-phone-alt"></i>0822-8513-3014
                </div>
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
                            href="{{ route('reservation') }}">Reservasi</a>
                    </li>
                    <li class="list-unstyled py-2">
                        <a class="text-decoration-none text-uppercase p-4" href="{{ route('menu') }}">Menu</a>
                    </li>
                    <li class="list-unstyled py-2">
                        <a class="text-decoration-none text-uppercase p-4" href="{{ route('contact') }}">Kontak</a>
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
            </div>
        </div>

        <div class="d-flex justify-content-around py-3 align-items-center d-lg-none">
            <div id="hamburger">
                <i class="fa fa-2x fa-bars me-3 text-white"></i>
            </div>
            <div class="mobile-nav-logo">
                <div class="logo">
                    <a href="{{ route('landing') }}">
                        <h1 class="mb-0" style="font-size: 1.2rem; letter-spacing: 2px;">CHARLOTTE & HUGO</h1>
                        <span class="logo-sub">Fine Dining · Padang</span>
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
                </div>
            </div>
            <div class="position-fixed w-75 bg-white h-100 top-0 start-0" id="mobile-menu">
                <div id="hamburger-cross" class="d-flex justify-content-end align-items-center py-2">
                    <i class="fa fa-2x fa-plus me-3 "></i>
                </div>
                <div class="menus">
                    <ul class="d-flex flex-column ps-2 mb-0 mt-4">
                        <li class="list-unstyled py-2">
                            <a class="text-dark text-decoration-none text-uppercase p-4" href="{{ route('landing') }}">Home</a>
                        </li>
                        <li class="list-unstyled py-2">
                            <a class="text-dark text-decoration-none text-uppercase p-4"
                                href="{{ route('about') }}">About</a>
                        </li>
                        <li class="list-unstyled py-2">
                            <a class="text-dark text-decoration-none text-uppercase p-4"
                                href="{{ route('reservation') }}">Reservasi</a>
                        </li>
                        <li class="list-unstyled py-2">
                            <a class="text-dark text-decoration-none text-uppercase p-4"
                                href="{{ route('menu') }}">Menu</a>
                        </li>
                        <li class="list-unstyled py-2">
                            <a class="text-dark text-decoration-none text-uppercase p-4"
                                href="{{ route('contact') }}">Kontak</a>
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
            <input type="search" placeholder="Cari menu, paket, dan lebih banyak lagi..." />
            <div class="search-button">
                <a href="#"><i class="fa fa-search"></i></a>
            </div>
        </div>
    </div>

    <div class="shopping-cart">
        <div class="shopping-cart-header d-flex justify-content-between">
            <h2>Keranjang Anda</h2>
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
        </div>
        <div class="shopping-cart-footer">
            <div class="d-flex justify-content-between px-3 py-2">
                <div>
                    <h2 class="mb-0">Subtotal</h2>
                    <p class="mb-0">Hubungi kami untuk pemesanan</p>
                </div>
                <div class="d-flex align-items-end">
                    <p class="footet-total-price mb-0">Rp 112K</p>
                </div>
            </div>
            <div class="d-flex justify-content-between px-2">
                <div class="footer-checkout">
                    <div class="anim-layer"></div>
                    <a href="{{ route('reservation') }}">Reservasi</a>
                </div>
                <div class="footer-shopping">
                    <div class="anim-layer"></div>
                    <a href="{{ route('menu') }}">Lihat Menu</a>
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
                                    <h1 class="mb-0" style="font-family: 'Cormorant Garamond', serif; font-weight: 300; letter-spacing: 3px; font-size: 1.8rem;">CHARLOTTE & HUGO</h1>
                                    <span style="font-family: 'Cormorant Garamond', serif; font-size: 0.7rem; letter-spacing: 4px; color: var(--accent-color); display: block;">FINE DINING · PADANG</span>
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
                                                class="fab fa-instagram"></i></a></li>
                                    <li class="mx-2"><a class="text-decoration-none text-white" href="https://wa.me/6208225133014"><i
                                                class="fab fa-whatsapp"></i></a></li>
                                    <li class="mx-2"><a class="text-decoration-none text-white" href="#"><i
                                                class="fab fa-tiktok"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-5 content-desc" data-aos="fade-right">
                        <p class="px-0">Charlotte & Hugo menghadirkan pengalaman bersantap yang tak terlupakan — memadukan keanggunan masakan Western dan cita rasa Asia dalam suasana yang intim dan romantic. Setiap hidangan adalah sebuah karya seni.</p>
                    </div>
                    <div class="row" data-aos="fade-right">
                        <div class="d-flex flex-column flex-lg-row px-0 justify-content-between">
                            <div class="location d-flex align-items-center pe-2 py-3">
                                <i class="fa-solid fa-location-dot text-white fa-2x border-bottom pb-2"></i>
                                <div class="ps-3">
                                    <p class="mb-0">
                                        Jl. Purus 1 No. 1F<br>
                                        Kota Padang
                                    </p>
                                </div>
                            </div>
                            <div class="location d-flex align-items-center pe-2 py-3">
                                <i class="fa-solid fa-mobile text-white fa-2x border-bottom pb-2"></i>
                                <div class="ps-3">
                                    <p class="mb-0">
                                        0822-8513-3014<br>
                                        <small style="color: var(--accent-color);">Reservasi & Info</small>
                                    </p>
                                </div>
                            </div>
                            <div class="location d-flex align-items-center pe-2 py-3">
                                <i class="fa-solid fa-clock text-white fa-2x border-bottom pb-2"></i>
                                <div class="ps-3">
                                    <p class="mb-0">
                                        Setiap Hari<br>
                                        <small style="color: var(--accent-color);">11:00 – 22:00 WIB</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="reservation-box" data-aos="fade-down-left">
                        <div class="reservation-wrapper">
                            <h2>Jam Buka</h2>
                            <div class="reservation-date-time">
                                <p>Senin – Kamis: .............. 11AM – 10PM</p>
                                <p>Jumat – Sabtu: .............. 11AM – 11PM</p>
                                <p>Minggu: .......................... 11AM – 10PM</p>
                                <p style="color: var(--accent-color);">Happy Hours (Sen–Kam): 11AM – 5PM</p>
                            </div>
                            <h2 class="pb-2">Reservasi</h2>
                            <h3>0822-8513-3014</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <p class="text-center pt-4 mt-3 pt-lg-0">&copy; <span id="copyrightCurrentYear"></span> <b>
                        Charlotte & Hugo.</b> All rights reserved. Design by <a
                        href="#" class="fw-bold author-name">Randi
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
    <style>
        @keyframes pulse-gold {
            0%, 100% { transform: scale(1); opacity: 1; }
            50% { transform: scale(1.2); opacity: 0.7; }
        }
    </style>
</body>

</html>
