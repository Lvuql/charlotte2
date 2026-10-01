<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Charlotte – Reservasi</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css" />
<style>{!! \App\Helpers\Settings::cssVariables() !!}</style>
</head>

<body>
    <div class="loader">
        <i class="fas fa-star loader-icone"></i>
        <p style="font-family: serif; letter-spacing: 5px; font-size: 1.4rem;">Charlotte</p>
        <div class="loader-ellipses">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    <header class="bg-white">
        <div class="container header my-3 d-none d-lg-flex">
            <div class="logo">
                <a href="{{ route('landing') }}">
                    
                    <img src="{{ asset('assets') }}/images/logo.svg" alt="Charlotte" class="logo-img" style="height: 45px;">
                </a>
            </div>
            <div class="menus">
                <ul class="d-flex mb-0">
                    <li class="list-unstyled py-2">
                        <a class="text-decoration-none text-uppercase p-4 text-dark"
                            href="{{ route('landing') }}">Home</a>
                    </li>
                    <li class="list-unstyled py-2">
                        <a class="text-decoration-none text-uppercase p-4 text-dark"
                            href="{{ route('about') }}">About</a>
                    </li>
                    <li class="list-unstyled py-2">
                        <a class="text-decoration-none text-uppercase p-4 text-dark"
                            href="{{ route('reservation') }}">Reservasi</a>
                    </li>
                    <li class="list-unstyled py-2">
                        <a class="text-decoration-none text-uppercase p-4 text-dark" href="{{ route('menu') }}">Menu</a>
                    </li>
                    <li class="list-unstyled py-2">
                        <a class="text-decoration-none text-uppercase p-4 text-dark"
                            href="{{ route('contact') }}">Kontak</a>
                    </li>
                </ul>
            </div>
            <div class="icons">
                <a class="text-decoration-none" id="searchBtn" href="#">
                    <i class="fa fa-search me-3 text-dark"></i>
                </a>
                <a class="text-decoration-none" id="shoppingbutton" href="#">
                    <i class="fa fa-shopping-bag me-3 text-dark"></i>
                </a>
                @guest
                <a class="text-decoration-none" href="#" data-bs-toggle="modal" data-bs-target="#loginModal" title="Login">
                    <i class="fa fa-user me-3 text-dark"></i>
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
                <i class="fa fa-2x fa-bars me-3 text-dark"></i>
            </div>
            <div class="mobile-nav-logo">
                <div class="logo">
                    <a href="{{ route('landing') }}">
                        
                        <img src="{{ asset('assets') }}/images/logo.svg" alt="Charlotte" class="logo-img" style="height: 45px;">
                    </a>
                </div>
            </div>
            <div class="mobile-nav-icons">
                <div class="icons">
                    <a class="text-decoration-none" id="searchBtnMobile" href="#">
                        <i class="fa fa-search me-3 text-dark"></i>
                    </a>
                    <a class="text-decoration-none" id="shoppingbuttonMobile" href="#">
                        <i class="fa fa-shopping-bag me-3 text-dark"></i>
                    </a>
                    @guest
                    <a class="text-decoration-none" href="#" data-bs-toggle="modal" data-bs-target="#loginModal" title="Login">
                        <i class="fa fa-user me-3 text-dark"></i>
                    </a>
                    @else
                    <a class="text-decoration-none text-success" href="{{ route('admin.dashboard') }}">
                        <i class="fa fa-user-check me-3 text-dark"></i>
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
            <input type="search" placeholder="Enter any text here..." />
            <div class="search-button">
                <a href="#"><i class="fa fa-search"></i></a>
            </div>
        </div>
    </div>

    <div class="shopping-cart">
        <div class="shopping-cart-header d-flex justify-content-between">
            <h2>Keranjang Pesanan Anda</h2>
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
                    <h3>Hugo Beef Wellington</h3>
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
                    <p class="mb-0">Pajak akan dihitung saat pembayaran</p>
                </div>
                <div class="d-flex align-items-end">
                    <p class="footet-total-price mb-0">Rp 277K</p>
                </div>
            </div>
            <div class="d-flex justify-content-between px-2">
                <div class="footer-checkout">
                    <div class="anim-layer"></div>
                    <a href="#">Bayar Sekarang</a>
                </div>
                <div class="footer-shopping">
                    <div class="anim-layer"></div>
                    <a href="#">Pilih Menu Lain</a>
                </div>
            </div>
        </div>
    </div>

    <main class="reservation-page">
        <section class="page-banner d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="banner-content">
                        <h2 class="text-white display-3 text-center" data-aos="fade-right" data-aos-delay="3000">
                            Reservation</h2>
                        <div class="divider" data-aos="fade-up-right" data-aos-delay="3000">
                            <div class="dot mb-2"></div>
                        </div>
                        <p class="text-white mb-0 text-center" data-aos="fade-left" data-aos-delay="3000">Just a few
                            click to make the reservation online for saving your time and money</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="reservation-form my-5 py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="text-center display-6 fw-bold" data-aos="fade-right">Reservation Form</h2>
                        <div data-aos="fade-right"
                            class="reservation-line d-flex justify-content-center align-items-center">
                            <span></span>
                        </div>
                        <form action="" class="position-relative">
                            <img data-aos="fade-down-left" class="d-none d-lg-block"
                                src="{{ asset('assets') }}/images/reservation-showcase.png" alt="">
                            <p class="text-center" data-aos="fade-up-right">We willing to help you make the
                                reservation online to save your time and money or you can call us directly through the
                                customer service hotline: 225-88888</p>
                            <div class="row mt-5">
                                <div data-aos="fade-right" class="col-md-6">
                                    <div class="input-group">
                                        <div class="icon-wrapper d-flex align-items-center position-relative">
                                            <i class="fa fa-user py-2 px-3"></i>
                                        </div>
                                        <input class="form-control bg-transparent border-0 px-3" type="text"
                                            placeholder="Username">
                                    </div>
                                    <div class="input-group">
                                        <div class="icon-wrapper d-flex align-items-center position-relative">
                                            <i class="fa fa-phone py-2 px-3"></i>
                                        </div>
                                        <input class="form-control bg-transparent border-0 px-3" type="text"
                                            placeholder="Phone">
                                    </div>
                                    <div class="input-group">
                                        <div class="icon-wrapper d-flex align-items-center position-relative">
                                            <i class="fa fa-calendar py-2 px-3"></i>
                                        </div>
                                        <input class="form-control bg-transparent border-0 px-3" type="date"
                                            placeholder="Date">
                                    </div>
                                </div>
                                <div data-aos="fade-left" class="col-md-6">
                                    <div class="input-group">
                                        <div class="icon-wrapper d-flex align-items-center position-relative">
                                            <i class="fa fa-envelope py-2 px-3"></i>
                                        </div>
                                        <input class="form-control bg-transparent border-0 px-3" type="email"
                                            placeholder="Email">
                                    </div>
                                    <div class="input-group">
                                        <div class="icon-wrapper d-flex align-items-center position-relative">
                                            <i class="fa fa-person py-2 px-3"></i>
                                        </div>
                                        <select class="form-select bg-transparent border-0 ps-3" name=""
                                            id="">
                                            <option value="">1 Person</option>
                                            <option value="">2 Person</option>
                                            <option value="">3 Person</option>
                                            <option value="">4 Person</option>
                                            <option value="">5 Person</option>
                                            <option value="">6 Person</option>
                                            <option value="">7 Person</option>
                                            <option value="">8 Person</option>
                                            <option value="">9 Person</option>
                                            <option value="">10 Person</option>
                                        </select>
                                    </div>
                                    <div class="input-group">
                                        <div class="icon-wrapper d-flex align-items-center position-relative">
                                            <i class="fa fa-clock py-2 px-3"></i>
                                        </div>
                                        <select type="text" placeholder="Time"
                                            class="ps-3 form-select bg-transparent border-0">
                                            <option>7:00 AM</option>
                                            <option>8:00 AM</option>
                                            <option>9:00 AM</option>
                                            <option>10:00 AM</option>
                                            <option>11:00 AM</option>
                                            <option>12:00 AM</option>
                                            <option>1:00 PM</option>
                                            <option>2:00 PM</option>
                                            <option>3:00 PM</option>
                                            <option>4:00 PM</option>
                                            <option>5:00 PM</option>
                                            <option>6:00 PM</option>
                                            <option>7:00 PM</option>
                                            <option>8:00 PM</option>
                                            <option>9:00 PM</option>
                                            <option>10:00 PM</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="input-group" data-aos="fade-up-right">
                                        <textarea class="form-control bg-transparent border-0 px-3" name="" id="" placeholder="Description"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center" data-aos="fade-up-left">
                                <div class="book-a-table contact-button">
                                    <div class="anim-layer"></div>
                                    <a href="#">Book Table</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>


        <section class="reservation-services py-5">
            <div class="container py-5">
                <div class="row">
                    <h2 data-aos="fade-right" class="position-relative text-center display-6 text-white fw-bold">
                        Fooday Best Service</h2>
                    <div data-aos="fade-right"
                        class="reservation-line d-flex justify-content-center align-items-center">
                        <span></span>
                    </div>
                </div>
                <div class="row">
                    <div data-aos="fade-right"
                        class="position-relative col-sm-12 col-md-6 col-lg-3 d-flex justify-content-center align-items-center flex-column">
                        <div class="icon-box">
                            <i class="fas fa-water fa-2x"></i>
                            <span class="number">1</span>
                        </div>
                        <h4>Reservation</h4>
                        <p class="text-center">Lorem ipsum dolor sit amet, tong consecteturto sed eiusmod incididunt
                            utote labore et</p>
                    </div>
                    <div data-aos="fade-down"
                        class="position-relative col-sm-12 col-md-6 col-lg-3 d-flex justify-content-center align-items-center flex-column">
                        <div class="icon-box">
                            <i class="fas fa-wine-glass-alt fa-2x"></i>
                            <span class="number">2</span>
                        </div>
                        <h4>Private Event</h4>
                        <p class="text-center">Lorem ipsum dolor sit amet, tong consecteturto sed eiusmod incididunt
                            utote labore et</p>
                    </div>
                    <div data-aos="fade-up"
                        class="position-relative col-sm-12 col-md-6 col-lg-3 d-flex justify-content-center align-items-center flex-column">
                        <div class="icon-box">
                            <i class="fas fa-laptop-house fa-2x"></i>
                            <span class="number">3</span>
                        </div>
                        <h4>Online Pesan</h4>
                        <p class="text-center">Lorem ipsum dolor sit amet, tong consecteturto sed eiusmod incididunt
                            utote labore et</p>
                    </div>
                    <div data-aos="fade-left"
                        class="position-relative col-sm-12 col-md-6 col-lg-3 d-flex justify-content-center align-items-center flex-column">
                        <div class="icon-box">
                            <i class="fas fa-motorcycle fa-2x"></i>
                            <span class="number">4</span>
                        </div>
                        <h4>Fast Delivery</h4>
                        <p class="text-center">Lorem ipsum dolor sit amet, tong consecteturto sed eiusmod incididunt
                            utote labore et</p>
                    </div>
                </div>
            </div>
        </section>


        <section class="reservation-events my-5 py-5 ">
            <div class="container mb-5">
                <div class="row">
                    <h2 class="text-center display-6 fw-bold" data-aos="fade-right">Upcoming Events</h2>
                    <div data-aos="fade-right"
                        class="reservation-line d-flex justify-content-center align-items-center">
                        <span></span>
                    </div>
                </div>
                <div class="row">
                    <div data-aos="fade-right" class="col-lg-6 mb-5 pb-5 mb-lg-0 pb-lg-0">
                        <div class="event-card position-relative">
                            <div class="event-heading d-flex py-2">
                                <div class="event-date px-3 d-flex flex-column">
                                    <h5 class="event-day">12</h5>
                                    <h6 class="event-month">JUN</h6>
                                </div>
                                <div class="heading ps-3 d-flex align-items-center">
                                    <p class="mb-0">Hong Kong Tasty Food Cooking Event</p>
                                </div>
                            </div>
                            <div class="image">
                                <img class="img-fluid" src="{{ asset('assets') }}/images/event-01.jpg"
                                    alt="">
                            </div>
                            <div class="event-info position-absolute">
                                <ul class="d-flex justify-content-around ps-lg-0 position-relative my-3">
                                    <li class="list-unstyled">
                                        <span class="num">03</span>
                                        <span class="cap">/days</span>
                                    </li>
                                    <li class="list-unstyled">
                                        <span class="num">50</span>
                                        <span class="cap">/foods</span>
                                    </li>
                                    <li class="list-unstyled">
                                        <span class="num">290</span>
                                        <span class="cap">/guests</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-left" class="col-lg-6">
                        <div class="event-card position-relative">
                            <div class="event-heading d-flex py-2">
                                <div class="event-date px-3 d-flex flex-column">
                                    <h5 class="event-day">12</h5>
                                    <h6 class="event-month">JUN</h6>
                                </div>
                                <div class="heading ps-3 d-flex align-items-center">
                                    <p class="mb-0">Hong Kong Tasty Food Cooking Event</p>
                                </div>
                            </div>
                            <div class="image">
                                <img class="img-fluid" src="{{ asset('assets') }}/images/event-02.jpg"
                                    alt="">
                            </div>
                            <div class="event-info position-absolute">
                                <ul class="d-flex justify-content-around ps-lg-0 position-relative my-3">
                                    <li class="list-unstyled">
                                        <span class="num">03</span>
                                        <span class="cap">/days</span>
                                    </li>
                                    <li class="list-unstyled">
                                        <span class="num">50</span>
                                        <span class="cap">/foods</span>
                                    </li>
                                    <li class="list-unstyled">
                                        <span class="num">290</span>
                                        <span class="cap">/guests</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="subscribe-us pb-5 mb-5">
            
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                    </div>
                    <div class="col-lg-8 d-flex flex-column flex-md-row align-items-lg-center">
                        <div class="content" data-aos="fade-right">
                            <h5 class="display-6 text-black">Subcribe Us Now</h5>
                            <p>
                                Get more news and delicious dishes everyday from us
                            </p>
                        </div>
                        <div class="subscribe-form d-flex ps-0 ms-0 ps-lg-5 ms-lg-5" data-aos="fade-left">
                            <div class="input-form w-100">
                                <input class="border-0 px-3 w-100" type="email" placeholder="Email">
                            </div>
                            <div class="input-button">
                                <a class="text-decoration-none" href="#">
                                    <i class="fa fa-paper-plane"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
                                    <img src="{{ asset('assets') }}/images/logo.svg" alt="Charlotte" style="height: 60px; filter: drop-shadow(0px 2px 10px rgba(201,149,106,0.3));">
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
                                        Info &amp; Reservasi
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
                                <p>Senin &amp; Kamis: ..... 11AM - 10PM</p>
                                <p>Jumat &amp; Sabtu: ... 11AM - 11PM</p>
                                <p>Minggu: ............... 11AM - 10PM</p>
                                <p></p>
                                <p></p>
                                <p></p>
                                <p></p>
                            </div>
                            <h2 class="pb-2">Nomor Reservasi</h2>
                            <h3>(0822) 8513-3014</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <p class="text-center pt-4 mt-3 pt-lg-0">&copy; <span id="copyrightCurrentYear"></span> <b>
                        Charlotte.</b> All rights reserved. Design by <a
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
                  <p class="text-muted small">Bergabunglah dengan Restoran kami</p>
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
    @include('components.login-modal')
</body>

</html>
