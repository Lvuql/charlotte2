@extends('layouts.frontend')
@section('content')

    {{-- ============================== HERO BANNER ============================== --}}
    <section class="banner py-5" style="background: linear-gradient(135deg, #1e1a17 0%, #2c1f14 60%, #3d2b1f 100%); min-height: 100vh; position: relative; overflow: hidden;">
        <div style="position: absolute; inset: 0; background: url('{{ asset('assets') }}/images/banner.jpg') center/cover no-repeat; opacity: 0.18;"></div>
        <div style="position: absolute; inset: 0; background: radial-gradient(ellipse at 70% 50%, rgba(201,149,106,0.15) 0%, transparent 70%);"></div>

        {{-- Decorative gold lines --}}
        <div style="position: absolute; top: 0; left: 50%; width: 1px; height: 80px; background: linear-gradient(to bottom, transparent, rgba(212,175,122,0.5)); transform: translateX(-50%);"></div>

        <div class="container py-5" style="position: relative; z-index: 2;">
            <div class="row align-items-center" style="min-height: 80vh;">
                <div class="col-md-7 banner-content pe-5" data-aos="fade-right" data-aos-delay="300">

                    <p style="font-family: 'Cormorant Garamond', serif; font-size: 0.8rem; letter-spacing: 6px; color: #c9956a; text-transform: uppercase; margin-bottom: 16px;">
                        ✦ Fine Dining Restaurant · Padang ✦
                    </p>

                    <h1 style="font-family: 'Cormorant Garamond', serif; font-size: clamp(2.8rem, 6vw, 5rem); font-weight: 300; color: #fffaf7; line-height: 1.1; margin-bottom: 8px;">
                        Charlotte
                    </h1>



                    <div style="width: 80px; height: 1px; background: linear-gradient(to right, #c9956a, #d4af7a); margin-bottom: 24px;"></div>

                    <p style="font-family: 'Cormorant Garamond', serif; font-size: 1.15rem; color: rgba(255,250,247,0.75); font-weight: 300; line-height: 1.8; max-width: 480px; margin-bottom: 40px;">
                        Sebuah pengalaman bersantap yang memadukan keindahan masakan Western dan cita rasa Asia — dalam suasana yang intim, elegan, dan penuh kenangan.
                    </p>

                    <div class="d-flex flex-wrap gap-3">
                        <div class="book-a-table">
                            <div class="anim-layer"></div>
                            <a href="{{ route('reservation') }}">Reservasi Meja</a>
                        </div>
                        <a href="{{ route('menu') }}" style="font-family: 'Cormorant Garamond', serif; font-size: 1rem; letter-spacing: 2px; color: #d4af7a; text-transform: uppercase; text-decoration: none; display: flex; align-items: center; gap: 8px; border: 1px solid rgba(212,175,122,0.4); padding: 12px 28px; border-radius: 4px; transition: all 0.3s ease;" onmouseover="this.style.background='rgba(212,175,122,0.1)'" onmouseout="this.style.background='transparent'">
                            <i class="fas fa-utensils" style="font-size: 0.8rem;"></i> Lihat Menu
                        </a>
                    </div>

                    <div class="d-flex gap-4 mt-5" style="border-top: 1px solid rgba(255,250,247,0.1); padding-top: 24px;">
                        <div>
                            <p style="font-family: 'Cormorant Garamond', serif; font-size: 2rem; font-weight: 600; color: #c9956a; margin: 0; line-height: 1;">5+</p>
                            <p style="font-size: 0.7rem; letter-spacing: 2px; color: rgba(255,250,247,0.5); margin: 0; text-transform: uppercase;">Tahun Berdiri</p>
                        </div>
                        <div style="width: 1px; background: rgba(255,255,255,0.1);"></div>
                        <div>
                            <p style="font-family: 'Cormorant Garamond', serif; font-size: 2rem; font-weight: 600; color: #c9956a; margin: 0; line-height: 1;">50+</p>
                            <p style="font-size: 0.7rem; letter-spacing: 2px; color: rgba(255,250,247,0.5); margin: 0; text-transform: uppercase;">Pilihan Menu</p>
                        </div>
                        <div style="width: 1px; background: rgba(255,255,255,0.1);"></div>
                        <div>
                            <p style="font-family: 'Cormorant Garamond', serif; font-size: 2rem; font-weight: 600; color: #c9956a; margin: 0; line-height: 1;">★ 4.9</p>
                            <p style="font-size: 0.7rem; letter-spacing: 2px; color: rgba(255,250,247,0.5); margin: 0; text-transform: uppercase;">Rating</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-5 mt-5 mt-md-0" data-aos="fade-left" data-aos-delay="600" style="position: relative;">
                    <div style="position: relative; padding: 20px;">
                        {{-- Decorative frame --}}
                        <div style="position: absolute; top: 0; left: 0; width: 60px; height: 60px; border-top: 2px solid #c9956a; border-left: 2px solid #c9956a;"></div>
                        <div style="position: absolute; bottom: 0; right: 0; width: 60px; height: 60px; border-bottom: 2px solid #c9956a; border-right: 2px solid #c9956a;"></div>
                        <img class="img img-fluid" src="{{ asset('assets') }}/images/banner-img.png"
                            alt="Charlotte Fine Dining" style="border-radius: 4px; filter: brightness(0.9) contrast(1.05);">
                    </div>
                </div>
            </div>
        </div>

        {{-- Scroll indicator --}}
        <div style="position: absolute; bottom: 30px; left: 50%; transform: translateX(-50%); text-align: center; z-index: 2;" data-aos="fade-up" data-aos-delay="1500">
            <p style="font-size: 0.65rem; letter-spacing: 4px; color: rgba(255,250,247,0.4); text-transform: uppercase; margin-bottom: 8px;">Scroll</p>
            <div style="width: 1px; height: 40px; background: linear-gradient(to bottom, rgba(212,175,122,0.6), transparent); margin: 0 auto;"></div>
        </div>
    </section>

    {{-- ============================== PACKAGES PROMO ============================== --}}
    <section class="py-5 my-5" style="background: #fdf8f4;">
        <div class="container">
            <div class="row mb-5" data-aos="fade-up">
                <div class="col-12 text-center">
                    <h5 style="font-family: 'Cormorant Garamond', serif; font-size: 0.8rem; letter-spacing: 5px; color: #c9956a; text-transform: uppercase; font-style: normal;">Penawaran Eksklusif</h5>
                    <h2 style="font-family: 'Cormorant Garamond', serif; font-size: clamp(2rem, 4vw, 3rem); font-weight: 400; color: #2c1f14; margin-top: 8px;">Paket & Promo Spesial</h2>
                    <div style="width: 60px; height: 1px; background: linear-gradient(to right, #c9956a, #d4af7a); margin: 16px auto;"></div>
                </div>
            </div>
            <div class="row g-4">
                {{-- Package 1 --}}
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div style="background: white; border: 1px solid #e8d5c4; border-radius: 8px; padding: 32px; height: 100%; transition: all 0.3s ease; position: relative; overflow: hidden;" onmouseover="this.style.boxShadow='0 12px 40px rgba(201,149,106,0.15)'; this.style.transform='translateY(-4px)'" onmouseout="this.style.boxShadow='none'; this.style.transform='translateY(0)'">
                        <div style="position: absolute; top: 0; right: 0; width: 80px; height: 80px; background: linear-gradient(135deg, transparent 50%, rgba(212,175,122,0.1) 50%);"></div>
                        <i class="fas fa-heart" style="color: #c9956a; font-size: 1.5rem; margin-bottom: 16px; display: block;"></i>
                        <h4 style="font-family: 'Cormorant Garamond', serif; font-size: 1.3rem; font-weight: 600; color: #2c1f14; margin-bottom: 8px;">Sweet Brew Pair</h4>
                        <p style="font-size: 0.9rem; color: #8b6f5e; line-height: 1.6; margin-bottom: 16px;">Oreo Milky Brownies atau Strawberry Tropical Brownies. Pilih favoritmu!</p>
                        <p style="font-family: 'Cormorant Garamond', serif; font-size: 1.4rem; font-weight: 600; color: #c9956a; margin: 0;">Rp 63.000 <span style="font-size: 1rem; color: #8b6f5e;">/ Rp 78.000</span></p>
                    </div>
                </div>
                {{-- Package 2 --}}
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div style="background: linear-gradient(135deg, #2c1f14 0%, #1e1a17 100%); border-radius: 8px; padding: 32px; height: 100%; transition: all 0.3s ease; position: relative; overflow: hidden;" onmouseover="this.style.boxShadow='0 12px 40px rgba(30,26,23,0.3)'; this.style.transform='translateY(-4px)'" onmouseout="this.style.boxShadow='none'; this.style.transform='translateY(0)'">
                        <div style="position: absolute; top: 12px; right: 16px; font-size: 0.6rem; letter-spacing: 2px; color: #d4af7a; text-transform: uppercase; border: 1px solid rgba(212,175,122,0.4); padding: 3px 8px; border-radius: 20px;">Populer</div>
                        <i class="fas fa-leaf" style="color: #4a7c59; font-size: 1.5rem; margin-bottom: 16px; display: block;"></i>
                        <h4 style="font-family: 'Cormorant Garamond', serif; font-size: 1.3rem; font-weight: 600; color: #fffaf7; margin-bottom: 8px;">The Ceremonial Matcha</h4>
                        <p style="font-size: 0.9rem; color: rgba(255,250,247,0.6); line-height: 1.6; margin-bottom: 16px;">2 Matcha Series drinks + 1 Cheesecake (semua varian) + custom writing request.</p>
                        <p style="font-family: 'Cormorant Garamond', serif; font-size: 1.4rem; font-weight: 600; color: #d4af7a; margin: 0;">Rp 300.000</p>
                    </div>
                </div>
                {{-- Package 3 --}}
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div style="background: white; border: 1px solid #e8d5c4; border-radius: 8px; padding: 32px; height: 100%; transition: all 0.3s ease; position: relative; overflow: hidden;" onmouseover="this.style.boxShadow='0 12px 40px rgba(201,149,106,0.15)'; this.style.transform='translateY(-4px)'" onmouseout="this.style.boxShadow='none'; this.style.transform='translateY(0)'">
                        <div style="position: absolute; top: 0; right: 0; width: 80px; height: 80px; background: linear-gradient(135deg, transparent 50%, rgba(212,175,122,0.1) 50%);"></div>
                        <i class="fas fa-concierge-bell" style="color: #c9956a; font-size: 1.5rem; margin-bottom: 16px; display: block;"></i>
                        <h4 style="font-family: 'Cormorant Garamond', serif; font-size: 1.3rem; font-weight: 600; color: #2c1f14; margin-bottom: 8px;">Love in Paris</h4>
                        <p style="font-size: 0.9rem; color: #8b6f5e; line-height: 1.6; margin-bottom: 16px;">Chicken Ballotine · Beef Panini · Rib Eye · Strawberry Cheesecake · 2 Mojito</p>
                        <p style="font-family: 'Cormorant Garamond', serif; font-size: 1.4rem; font-weight: 600; color: #c9956a; margin: 0;">Rp 800.000 <span style="font-size: 0.8rem; color: #8b6f5e;">/couple</span></p>
                    </div>
                </div>
                {{-- Package 4 --}}
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div style="background: white; border: 1px solid #e8d5c4; border-radius: 8px; padding: 32px; height: 100%; transition: all 0.3s ease;" onmouseover="this.style.boxShadow='0 12px 40px rgba(201,149,106,0.15)'; this.style.transform='translateY(-4px)'" onmouseout="this.style.boxShadow='none'; this.style.transform='translateY(0)'">
                        <i class="fas fa-birthday-cake" style="color: #c9956a; font-size: 1.5rem; margin-bottom: 16px; display: block;"></i>
                        <h4 style="font-family: 'Cormorant Garamond', serif; font-size: 1.3rem; font-weight: 600; color: #2c1f14; margin-bottom: 8px;">Birthday Delight</h4>
                        <p style="font-size: 0.9rem; color: #8b6f5e; line-height: 1.6; margin-bottom: 16px;">Dekorasi standar + Cheesecake + Fries/Sweet Platter. Rayakan momen spesialmu!</p>
                        <p style="font-family: 'Cormorant Garamond', serif; font-size: 1.4rem; font-weight: 600; color: #c9956a; margin: 0;">Rp 300.000</p>
                    </div>
                </div>
                {{-- Package 5 --}}
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div style="background: white; border: 1px solid #e8d5c4; border-radius: 8px; padding: 32px; height: 100%; transition: all 0.3s ease;" onmouseover="this.style.boxShadow='0 12px 40px rgba(201,149,106,0.15)'; this.style.transform='translateY(-4px)'" onmouseout="this.style.boxShadow='none'; this.style.transform='translateY(0)'">
                        <i class="fas fa-users" style="color: #c9956a; font-size: 1.5rem; margin-bottom: 16px; display: block;"></i>
                        <h4 style="font-family: 'Cormorant Garamond', serif; font-size: 1.3rem; font-weight: 600; color: #2c1f14; margin-bottom: 8px;">Arisan / Social Gathering</h4>
                        <p style="font-size: 0.9rem; color: #8b6f5e; line-height: 1.6; margin-bottom: 16px;">Min. 5 pax: Appetizer + Main Course pilihan + 1 scoop Gelato.</p>
                        <p style="font-family: 'Cormorant Garamond', serif; font-size: 1.4rem; font-weight: 600; color: #c9956a; margin: 0;">Rp 80.000+ <span style="font-size: 0.8rem; color: #8b6f5e;">/pax</span></p>
                    </div>
                </div>
                {{-- Package 6 --}}
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div style="background: white; border: 1px solid #e8d5c4; border-radius: 8px; padding: 32px; height: 100%; transition: all 0.3s ease;" onmouseover="this.style.boxShadow='0 12px 40px rgba(201,149,106,0.15)'; this.style.transform='translateY(-4px)'" onmouseout="this.style.boxShadow='none'; this.style.transform='translateY(0)'">
                        <i class="fas fa-briefcase" style="color: #c9956a; font-size: 1.5rem; margin-bottom: 16px; display: block;"></i>
                        <h4 style="font-family: 'Cormorant Garamond', serif; font-size: 1.3rem; font-weight: 600; color: #2c1f14; margin-bottom: 8px;">Business Lunch</h4>
                        <p style="font-size: 0.9rem; color: #8b6f5e; line-height: 1.6; margin-bottom: 16px;">Sen–Jum, 12:00–15:00. Appetizer + Chicken Main Course + 1 scoop Gelato.</p>
                        <p style="font-family: 'Cormorant Garamond', serif; font-size: 1.4rem; font-weight: 600; color: #c9956a; margin: 0;">Rp 85.000+</p>
                    </div>
                </div>
            </div>

            {{-- Happylicious Hours Banner --}}
            <div class="row mt-4" data-aos="fade-up">
                <div class="col-12">
                    <div style="background: linear-gradient(135deg, #c9956a 0%, #d4af7a 100%); border-radius: 8px; padding: 28px 40px; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 16px;">
                        <div>
                            <p style="font-size: 0.7rem; letter-spacing: 4px; color: rgba(255,255,255,0.7); text-transform: uppercase; margin: 0;">Promo Harian</p>
                            <h3 style="font-family: 'Cormorant Garamond', serif; font-size: 1.8rem; font-weight: 600; color: white; margin: 4px 0;">✨ Happylicious Hours</h3>
                            <p style="color: rgba(255,255,255,0.85); margin: 0; font-size: 0.95rem;">Senin–Kamis, 11:00–17:00 · Dapatkan <strong>Free Teh Jea</strong> untuk setiap order Sup Ayam Nusantara, Ayam Lodho, atau Ayam Betutu!</p>
                        </div>
                        <div class="book-a-table" style="flex-shrink: 0;">
                            <div class="anim-layer" style="background: rgba(0,0,0,0.1);"></div>
                            <a href="{{ route('reservation') }}" style="background: white; color: #c9956a; border: none;">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================== ABOUT US ============================== --}}
    <section class="about-us py-5 my-5">
        <div class="container">
            <div class="row gy-5 g-lg-5 align-items-center">
                <div class="col-lg-6 about-img-box">
                    <div class="row g-3">
                        <div class="col-6" data-aos="fade-right">
                            <img class="img-fluid rounded w-100" src="{{ asset('assets') }}/images/about-1.jpg" alt="Charlotte suasana">
                        </div>
                        <div class="col-6 text-right" data-aos="fade-down">
                            <img class="img-fluid rounded w-75" src="{{ asset('assets') }}/images/about-2.jpg" alt="Hidangan Charlotte">
                        </div>
                        <div class="col-6 text-end" data-aos="fade-right">
                            <img class="img-fluid rounded w-75" src="{{ asset('assets') }}/images/about-3.jpg" alt="Dessert Hugo">
                        </div>
                        <div class="col-6 text-end" data-aos="fade-up">
                            <img class="img-fluid rounded w-100" src="{{ asset('assets') }}/images/about-4.jpg" alt="Gelato Charlotte">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 about-content" data-aos="fade-left">
                    <h5 class="section-title">Tentang Kami</h5>
                    <h2 class="mb-4 dis">Selamat Datang di <i class="fas fa-star me-2" style="color: #c9956a;"></i>Charlotte</h2>
                    <p class="mb-4">Charlotte adalah restoran fine dining yang berlokasi di jantung Kota Padang, menghadirkan perpaduan unik masakan Western klasik dan cita rasa Asia yang autentik dalam suasana yang elegan dan intim.</p>
                    <p class="mb-4">Dari Beef Wellington yang sempurna hingga Matcha Brûlée Cheesecake yang memanjakan, setiap hidangan diracik dengan bahan-bahan premium dan penuh cinta oleh tim koki berpengalaman kami.</p>
                    <div class="row g-4 mb-4 about-extra">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center px-3 about-experience">
                                <h1 class="flex-shrink-0 mb-0">5+</h1>
                                <div class="ps-4">
                                    <p class="mb-0">Tahun</p>
                                    <h6 class="text-uppercase mb-0">Pengalaman</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center px-3 about-popular">
                                <h1 class="flex-shrink-0 mb-0">50+</h1>
                                <div class="ps-4">
                                    <p class="mb-0">Pilihan</p>
                                    <h6 class="text-uppercase mb-0">Menu</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="book-a-table">
                        <div class="anim-layer"></div>
                        <a href="{{ route('about') }}">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================== MENU SECTION ============================== --}}
    <section class="our-menu py-5 my-5">
        <div class="container">
            <div class="row" data-aos="fade-right">
                <div class="section-title text-center">
                    <h5>Menu Spesial</h5>
                    <h2 class="display-5 fw-bold">Hidangan Unggulan Kami</h2>
                </div>
            </div>
            <div class="row position-relative">
                <div data-aos="fade-left" class="slider slider-indicators-wrapper justify-content-center">
                    <div class="slider-indicators">
                        <div class="indicators-icon active text-center">
                            <i class="fas fa-drumstick-bite fa-2x"></i>
                        </div>
                        <div class="indicators-title text-center">
                            <h5>Western</h5>
                        </div>
                    </div>
                    <div class="slider-indicators">
                        <div class="indicators-icon text-center">
                            <i class="fas fa-bowl-rice fa-2x"></i>
                        </div>
                        <div class="indicators-title text-center">
                            <h5>Asian</h5>
                        </div>
                    </div>
                    <div class="slider-indicators">
                        <div class="indicators-icon text-center">
                            <i class="fas fa-cake-candles fa-2x"></i>
                        </div>
                        <div class="indicators-title text-center">
                            <h5>Dessert</h5>
                        </div>
                    </div>
                    <div class="slider-indicators">
                        <div class="indicators-icon text-center">
                            <i class="fas fa-ice-cream fa-2x"></i>
                        </div>
                        <div class="indicators-title text-center">
                            <h5>Gelato</h5>
                        </div>
                    </div>
                    <div class="slider-indicators">
                        <div class="indicators-icon text-center">
                            <i class="fas fa-coffee fa-2x"></i>
                        </div>
                        <div class="indicators-title text-center">
                            <h5>Minuman</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div id="our-menus" class="slider" data-aos="fade-up">
                {{-- WESTERN --}}
                <div>
                    <div class="row my-5 py-3">
                        <div class="col-lg-5">
                            <div class="pb-5 pb-lg-0">
                                <img width="90%" src="{{ asset('assets') }}/images/menu-slider-dinner.png" alt="Western Dishes Charlotte Hugo">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="item-wrapper d-flex justify-content-between">
                                <div class="item-left">
                                    <h5>Hugo Beef Wellington</h5>
                                    <p>Beef tenderloin bungkus pastry renyah dengan mushroom duxelles, saus red wine</p>
                                </div>
                                <div class="item-right">
                                    <span class="item-price"><span class="price-symbol">Rp </span>120K</span>
                                    <div class="item-btn"><a href="{{ route('menu') }}">Pesan</a></div>
                                </div>
                            </div>
                            <div class="item-wrapper d-flex justify-content-between">
                                <div class="item-left">
                                    <h5>French Chicken Ballotine</h5>
                                    <p>Ayam gulung isi sayuran dan rempah khas Prancis dengan saus beurre blanc</p>
                                </div>
                                <div class="item-right">
                                    <span class="item-price"><span class="price-symbol">Rp </span>63K</span>
                                    <div class="item-btn"><a href="{{ route('menu') }}">Pesan</a></div>
                                </div>
                            </div>
                            <div class="item-wrapper d-flex justify-content-between">
                                <div class="item-left">
                                    <h5>Rib Eye Meltique Steak 200gr</h5>
                                    <p>Rib eye premium dengan pilihan saus mushroom, BBQ, atau pepper</p>
                                </div>
                                <div class="item-right">
                                    <span class="item-price"><span class="price-symbol">Rp </span>150K</span>
                                    <div class="item-btn"><a href="{{ route('menu') }}">Pesan</a></div>
                                </div>
                            </div>
                            <div class="item-wrapper d-flex justify-content-between">
                                <div class="item-left">
                                    <h5>Salmon Steak</h5>
                                    <p>Salmon fillet panggang dengan lemon butter caper sauce dan vegetables</p>
                                </div>
                                <div class="item-right">
                                    <span class="item-price"><span class="price-symbol">Rp </span>165K</span>
                                    <div class="item-btn"><a href="{{ route('menu') }}">Pesan</a></div>
                                </div>
                            </div>
                            <div class="item-wrapper d-flex justify-content-between">
                                <div class="item-left">
                                    <h5>Classic Beef Bourguignon</h5>
                                    <p>Semur daging sapi khas Perancis dalam red wine dengan mushroom & carrots</p>
                                </div>
                                <div class="item-right">
                                    <span class="item-price"><span class="price-symbol">Rp </span>95K</span>
                                    <div class="item-btn"><a href="{{ route('menu') }}">Pesan</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- ASIAN --}}
                <div>
                    <div class="row my-5 py-3">
                        <div class="col-lg-5">
                            <div class="pb-5 pb-lg-0">
                                <img width="90%" src="{{ asset('assets') }}/images/menu-slider-lunch.png" alt="Asian Dishes Charlotte Hugo">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="item-wrapper d-flex justify-content-between">
                                <div class="item-left">
                                    <h5>Balinese Chicken Betutu</h5>
                                    <p>Ayam betutu khas Bali dengan bumbu rempah pilihan, dipanggang sempurna</p>
                                </div>
                                <div class="item-right">
                                    <span class="item-price"><span class="price-symbol">Rp </span>45K</span>
                                    <div class="item-btn"><a href="{{ route('menu') }}">Pesan</a></div>
                                </div>
                            </div>
                            <div class="item-wrapper d-flex justify-content-between">
                                <div class="item-left">
                                    <h5>Ayam Lodho</h5>
                                    <p>Ayam lodho khas Jawa Timur dengan santan dan rempah tradisional</p>
                                </div>
                                <div class="item-right">
                                    <span class="item-price"><span class="price-symbol">Rp </span>45K</span>
                                    <div class="item-btn"><a href="{{ route('menu') }}">Pesan</a></div>
                                </div>
                            </div>
                            <div class="item-wrapper d-flex justify-content-between">
                                <div class="item-left">
                                    <h5>Nasi Goreng Carsiu</h5>
                                    <p>Nasi goreng dengan irisan char siu (daging BBQ Chinese) yang lezat</p>
                                </div>
                                <div class="item-right">
                                    <span class="item-price"><span class="price-symbol">Rp </span>55K</span>
                                    <div class="item-btn"><a href="{{ route('menu') }}">Pesan</a></div>
                                </div>
                            </div>
                            <div class="item-wrapper d-flex justify-content-between">
                                <div class="item-left">
                                    <h5>Mie Godog Prawn</h5>
                                    <p>Mie rebus dengan udang segar dan kuah gurih yang kaya rempah</p>
                                </div>
                                <div class="item-right">
                                    <span class="item-price"><span class="price-symbol">Rp </span>55K</span>
                                    <div class="item-btn"><a href="{{ route('menu') }}">Pesan</a></div>
                                </div>
                            </div>
                            <div class="item-wrapper d-flex justify-content-between">
                                <div class="item-left">
                                    <h5>Sup Iga Nusantara</h5>
                                    <p>Sup iga sapi dengan bumbu rempah Nusantara yang hangat dan menyehatkan</p>
                                </div>
                                <div class="item-right">
                                    <span class="item-price"><span class="price-symbol">Rp </span>85K</span>
                                    <div class="item-btn"><a href="{{ route('menu') }}">Pesan</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- DESSERT --}}
                <div>
                    <div class="row my-5 py-3">
                        <div class="col-lg-5">
                            <div class="pb-5 pb-lg-0">
                                <img width="90%" src="{{ asset('assets') }}/images/menu-slider-dessert.png" alt="Dessert Charlotte Hugo">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="item-wrapper d-flex justify-content-between">
                                <div class="item-left">
                                    <h5>Matcha Brûlée Cheesecake</h5>
                                    <p>Cheesecake matcha premium dengan tekstur lembut dan brûlée yang karamel</p>
                                </div>
                                <div class="item-right">
                                    <span class="item-price"><span class="price-symbol">Rp </span>49.5K</span>
                                    <div class="item-btn"><a href="{{ route('menu') }}">Pesan</a></div>
                                </div>
                            </div>
                            <div class="item-wrapper d-flex justify-content-between">
                                <div class="item-left">
                                    <h5>Strawberry Cheesecake</h5>
                                    <p>Cheesecake lembut dengan topping strawberry segar yang menyegarkan</p>
                                </div>
                                <div class="item-right">
                                    <span class="item-price"><span class="price-symbol">Rp </span>45K</span>
                                    <div class="item-btn"><a href="{{ route('menu') }}">Pesan</a></div>
                                </div>
                            </div>
                            <div class="item-wrapper d-flex justify-content-between">
                                <div class="item-left">
                                    <h5>Burnt Cheesecake</h5>
                                    <p>Basque burnt cheesecake dengan tekstur creamy di dalam, caramelized di luar</p>
                                </div>
                                <div class="item-right">
                                    <span class="item-price"><span class="price-symbol">Rp </span>47K</span>
                                    <div class="item-btn"><a href="{{ route('menu') }}">Pesan</a></div>
                                </div>
                            </div>
                            <div class="item-wrapper d-flex justify-content-between">
                                <div class="item-left">
                                    <h5>Charlotte Cake</h5>
                                    <p>Kue signature Charlotte dengan lapisan génoise dan cream yang khas</p>
                                </div>
                                <div class="item-right">
                                    <span class="item-price"><span class="price-symbol">Rp </span>49K</span>
                                    <div class="item-btn"><a href="{{ route('menu') }}">Pesan</a></div>
                                </div>
                            </div>
                            <div class="item-wrapper d-flex justify-content-between">
                                <div class="item-left">
                                    <h5>Tiramisu</h5>
                                    <p>Tiramisu klasik Italia dengan mascarpone lembut dan espresso yang kuat</p>
                                </div>
                                <div class="item-right">
                                    <span class="item-price"><span class="price-symbol">Rp </span>48K</span>
                                    <div class="item-btn"><a href="{{ route('menu') }}">Pesan</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- GELATO --}}
                <div>
                    <div class="row my-5 py-3">
                        <div class="col-lg-5">
                            <div class="pb-5 pb-lg-0">
                                <img width="90%" src="{{ asset('assets') }}/images/menu-slider-dessert.png" alt="Gelato Charlotte Hugo">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="item-wrapper d-flex justify-content-between">
                                <div class="item-left">
                                    <h5>Croissant Milky Gelato</h5>
                                    <p>Croissant hangat renyah dengan gelato vanilla susu premium pilihan</p>
                                </div>
                                <div class="item-right">
                                    <span class="item-price"><span class="price-symbol">Rp </span>43K</span>
                                    <div class="item-btn"><a href="{{ route('menu') }}">Pesan</a></div>
                                </div>
                            </div>
                            <div class="item-wrapper d-flex justify-content-between">
                                <div class="item-left">
                                    <h5>Gelato Premium Cone</h5>
                                    <p>1–2 scoop gelato premium dengan berbagai pilihan rasa artisan</p>
                                </div>
                                <div class="item-right">
                                    <span class="item-price"><span class="price-symbol">Rp </span>35–42K</span>
                                    <div class="item-btn"><a href="{{ route('menu') }}">Pesan</a></div>
                                </div>
                            </div>
                            <div class="item-wrapper d-flex justify-content-between">
                                <div class="item-left">
                                    <h5>Mini Charlotte Pies</h5>
                                    <p>Mini pastry pies dengan isian krim lembut dan topping buah segar</p>
                                </div>
                                <div class="item-right">
                                    <span class="item-price"><span class="price-symbol">Rp </span>38K</span>
                                    <div class="item-btn"><a href="{{ route('menu') }}">Pesan</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- MINUMAN --}}
                <div>
                    <div class="row my-5 py-3">
                        <div class="col-lg-5">
                            <div class="pb-5 pb-lg-0">
                                <img width="90%" src="{{ asset('assets') }}/images/menu-slider-dessert.png" alt="Beverages Charlotte Hugo">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="item-wrapper d-flex justify-content-between">
                                <div class="item-left">
                                    <h5>Coffee Bundle</h5>
                                    <p>Caramel Macchiato + Choco Latine atau Croissant</p>
                                </div>
                                <div class="item-right">
                                    <span class="item-price"><span class="price-symbol">Rp </span>45K</span>
                                    <div class="item-btn"><a href="{{ route('menu') }}">Pesan</a></div>
                                </div>
                            </div>
                            <div class="item-wrapper d-flex justify-content-between">
                                <div class="item-left">
                                    <h5>Matcha Series</h5>
                                    <p>Berbagai varian minuman matcha artisanal pilihan</p>
                                </div>
                                <div class="item-right">
                                    <span class="item-price"><span class="price-symbol">Rp </span>35–49K</span>
                                    <div class="item-btn"><a href="{{ route('menu') }}">Pesan</a></div>
                                </div>
                            </div>
                            <div class="item-wrapper d-flex justify-content-between">
                                <div class="item-left">
                                    <h5>Artisan Tea</h5>
                                    <p>Koleksi teh artisanal premium dari berbagai penjuru dunia</p>
                                </div>
                                <div class="item-right">
                                    <span class="item-price"><span class="price-symbol">Rp </span>49K</span>
                                    <div class="item-btn"><a href="{{ route('menu') }}">Pesan</a></div>
                                </div>
                            </div>
                            <div class="item-wrapper d-flex justify-content-between">
                                <div class="item-left">
                                    <h5>Mojito & Squash</h5>
                                    <p>Mojito Strawberry, Green Apple, atau berbagai varian squash segar</p>
                                </div>
                                <div class="item-right">
                                    <span class="item-price"><span class="price-symbol">Rp </span>32–40K</span>
                                    <div class="item-btn"><a href="{{ route('menu') }}">Pesan</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================== TESTIMONIALS ============================== --}}
    <section class="testimonials py-5 my-5">
        <div class="container py-5">
            <div class="row" data-aos="fade-right">
                <div class="section-title text-center">
                    <h5>Testimonial</h5>
                    <h2 class="display-5 fw-bold">Apa Kata Tamu Kami</h2>
                </div>
            </div>
            <div class="row">
                <div class="testimonial-slider-wrapper" data-aos="fade-up">
                    <div class="slider-content pt-4 pb-4 mx-4">
                        <div>
                            <div class="testi-content">
                                <p>"Charlotte adalah tempat terbaik untuk date night! Suasana sangat romantis, makanannya luar biasa enak. Matcha Brûlée Cheesecake-nya unforgettable! Wajib balik lagi."</p>
                            </div>
                            <div class="testi-info">
                                <span class="name">Aulia Rahma</span>
                                <span class="position">Food Blogger · Padang</span>
                            </div>
                        </div>
                        <div>
                            <div class="testi-content">
                                <p>"Beef Wellington-nya perfect! Tidak menyangka ada restoran fine dining sekelas ini di Padang. Service-nya juga ramah dan profesional. Highly recommended!"</p>
                            </div>
                            <div class="testi-info">
                                <span class="name">Reza Pratama</span>
                                <span class="position">Pelanggan Setia</span>
                            </div>
                        </div>
                        <div>
                            <div class="testi-content">
                                <p>"Paket Love in Paris-nya sempurna untuk anniversary kami. Dekorasi intimate, makanan berkelas, dan pengalaman yang benar-benar berkesan. Terima kasih Charlotte!"</p>
                            </div>
                            <div class="testi-info">
                                <span class="name">Dina & Fajar</span>
                                <span class="position">Anniversary Couple</span>
                            </div>
                        </div>
                        <div>
                            <div class="testi-content">
                                <p>"Business lunch di sini selalu memuaskan. Menu variatif, porsi ideal, dan suasana yang mendukung percakapan serius. Lokasi strategis di Padang. Jadi pilihan utama meeting saya."</p>
                            </div>
                            <div class="testi-info">
                                <span class="name">Hendri Kurniawan</span>
                                <span class="position">Business Owner</span>
                            </div>
                        </div>
                    </div>
                    <div class="slider-nav-wrapper mx-5">
                        <div class="slider-nav">
                            <div class="slider-nav-img active">
                                <img src="{{ asset('assets') }}/images/testi-1.jpg" alt="">
                            </div>
                            <div class="slider-nav-img">
                                <img src="{{ asset('assets') }}/images/testi-2.jpg" alt="">
                            </div>
                            <div class="slider-nav-img">
                                <img src="{{ asset('assets') }}/images/testi-3.jpg" alt="">
                            </div>
                            <div class="slider-nav-img">
                                <img src="{{ asset('assets') }}/images/testi-4.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================== SERVICES ============================== --}}
    <section class="our-services py-5 my-5">
        <div class="container">
            <div class="row">
                <div class="section-title text-center" data-aos="fade-right">
                    <h5>Layanan Kami</h5>
                    <h2 class="display-6 fw-bold">Pengalaman Yang Kami Hadirkan</h2>
                </div>
            </div>
            <div class="row pt-5">
                <div data-aos="fade-up-right"
                    class="col-sm-12 col-md-6 col-lg-3 d-flex justify-content-center align-items-center flex-column">
                    <div class="icon-box">
                        <i class="fas fa-calendar-check fa-2x"></i>
                        <span class="number">1</span>
                    </div>
                    <h4>Reservasi</h4>
                    <p class="text-center">Pesan meja untuk momen spesial Anda — anniversary, ulang tahun, atau makan malam romantis</p>
                </div>
                <div data-aos="fade-down"
                    class="col-sm-12 col-md-6 col-lg-3 d-flex justify-content-center align-items-center flex-column">
                    <div class="icon-box">
                        <i class="fas fa-champagne-glasses fa-2x"></i>
                        <span class="number">2</span>
                    </div>
                    <h4>Private Event</h4>
                    <p class="text-center">Sediakan ruang eksklusif untuk gathering, arisan, ulang tahun, atau event bisnis Anda</p>
                </div>
                <div data-aos="fade-up"
                    class="col-sm-12 col-md-6 col-lg-3 d-flex justify-content-center align-items-center flex-column">
                    <div class="icon-box">
                        <i class="fas fa-mobile-screen fa-2x"></i>
                        <span class="number">3</span>
                    </div>
                    <h4>Pesan Online</h4>
                    <p class="text-center">Hubungi kami via WhatsApp untuk reservasi mudah dan cepat kapanpun Anda mau</p>
                </div>
                <div data-aos="fade-up-left"
                    class="col-sm-12 col-md-6 col-lg-3 d-flex justify-content-center align-items-center flex-column">
                    <div class="icon-box">
                        <i class="fas fa-gifts fa-2x"></i>
                        <span class="number">4</span>
                    </div>
                    <h4>Paket Spesial</h4>
                    <p class="text-center">Nikmati berbagai paket eksklusif — dari Coffee Bundle hingga Set Menu Couple yang romantis</p>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================== GALLERY ============================== --}}
    <section class="our-gallery pt-5">
        <div class="container-fluid pt-5">
            <div class="row">
                <div class="section-title text-center" data-aos="fade-right">
                    <h5>Galeri</h5>
                    <h2 class="text-white display-6 fw-bold">Momen di Charlotte</h2>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-md-3 p-0">
                    <div data-aos="fade-down-right" class="gallery-image gallery-image-one"></div>
                </div>
                <div class="col-md-6 p-0">
                    <div class="row m-0">
                        <div class="col-md-8 p-0">
                            <div data-aos="fade-down" class="gallery-image-two"></div>
                        </div>
                        <div class="col-md-4 p-0">
                            <div data-aos="fade-down" class="gallery-image-three"></div>
                        </div>
                    </div>
                    <div class="row m-0">
                        <div class="col-md-4 p-0">
                            <div data-aos="fade-up" class="gallery-image-five"></div>
                        </div>
                        <div class="col-md-8 p-0">
                            <div data-aos="fade-up" class="gallery-image-six"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 p-0">
                    <div data-aos="fade-up-left" class="gallery-image gallery-image-four"></div>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================== RESERVATION CTA ============================== --}}
    <section class="reservation">
        <img class="d-md-none d-lg-block" src="{{ asset('assets') }}/images/find-a-table.png" alt="">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 py-5 reservation-content px-5" data-aos="fade-right">
                    <div class="reservation-column py-5 px-3">
                        <h2 class="text-center text-white display-6 fw-bold">Buat Reservasi</h2>
                        <p class="text-center text-white">Atau hubungi kami langsung di <span>0822-8513-3014</span></p>
                        <div class="row mt-5 pt-3">
                            <div class="col-12 col-lg-6">
                                <div class="input d-flex align-items-center">
                                    <i class="fa fa-phone py-2 px-3"></i>
                                    <input class="form-control bg-transparent border-0 px-3" type="text"
                                        placeholder="Nomor Telepon">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 mt-4 mt-lg-0">
                                <div class="input d-flex align-items-center">
                                    <i class="fa fa-person py-2 px-3"></i>
                                    <select class="form-select bg-transparent border-0" name="" id="">
                                        <option value="">1 Orang</option>
                                        <option value="">2 Orang</option>
                                        <option value="">3 Orang</option>
                                        <option value="">4 Orang</option>
                                        <option value="">5 Orang</option>
                                        <option value="">6 Orang</option>
                                        <option value="">7 Orang</option>
                                        <option value="">8 Orang</option>
                                        <option value="">9 Orang</option>
                                        <option value="">10+ Orang</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-12 col-lg-6">
                                <div class="input d-flex align-items-center">
                                    <i class="fa fa-calendar py-2 px-3"></i>
                                    <input class="form-control datepicker bg-transparent border-0 px-3" type="date">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 mt-4 mt-lg-0">
                                <div class="input d-flex align-items-center">
                                    <i class="fa fa-clock py-2 px-3"></i>
                                    <select type="text" class="form-select bg-transparent border-0">
                                        <option>11:00</option>
                                        <option>12:00</option>
                                        <option>13:00</option>
                                        <option>14:00</option>
                                        <option>15:00</option>
                                        <option>16:00</option>
                                        <option>17:00</option>
                                        <option>18:00</option>
                                        <option>19:00</option>
                                        <option>20:00</option>
                                        <option>21:00</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center mt-5 pt-3">
                            <div class="book-a-table">
                                <div class="anim-layer"></div>
                                <a href="{{ route('reservation') }}">Temukan Meja</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-md-block reservation-bg" data-aos="fade-left"></div>
            </div>
        </div>
    </section>

    {{-- ============================== SUBSCRIBE / CONTACT CTA ============================== --}}
    <section class="subscribe-us pb-5 mb-5">
        <img class="d-none d-lg-block" src="{{ asset('assets') }}/images/subscribe-us.png" alt=""
            data-aos="fade-down-right">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                </div>
                <div class="col-lg-8 d-flex flex-column flex-md-row align-items-lg-center">
                    <div class="content" data-aos="fade-right">
                        <h5 class="display-6 text-black" style="font-family: 'Cormorant Garamond', serif; font-weight: 300; letter-spacing: 2px;">Tetap Terhubung</h5>
                        <p>
                            Dapatkan info promo terbaru, menu seasonal, dan penawaran eksklusif Charlotte setiap minggunya
                        </p>
                    </div>
                    <div class="subscribe-form d-flex ps-0 ms-0 ps-lg-5 ms-lg-5" data-aos="fade-left">
                        <div class="input-form w-100">
                            <input class="border-0 px-3 w-100" type="email" placeholder="Email Anda">
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
@endsection
