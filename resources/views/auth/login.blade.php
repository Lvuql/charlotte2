@extends('layouts.app')

@section('content')
<section class="banner py-5" style="background: url('{{ asset('assets/images/banner-img.png') }}') center/cover; min-height: 400px; display:flex; align-items:center;">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5" data-aos="fade-up">
                <div class="card shadow-lg border-0" style="background: rgba(255,255,255,0.95); border-radius: 15px;">
                    <div class="card-body p-5">
                        <div class="text-center mb-4">
                            <h3 class="fw-bold text-dark mb-2">Selamat Datang</h3>
                            <p class="text-muted">Silakan masuk ke akun Anda</p>
                        </div>

                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="name@example.com" required autofocus>
                                <label for="email" class="text-muted">Alamat Email</label>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-floating mb-4">
                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password" required>
                                <label for="password" class="text-muted">Kata Sandi</label>
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember">
                                    <label class="form-check-label text-muted" for="remember">
                                        Ingat saya
                                    </label>
                                </div>
                            </div>

                            <button type="submit" class="btn w-100 mb-4" style="background-color: var(--primary-color); color: white; border-radius: 30px; padding: 12px; font-weight: bold;">Masuk</button>

                            <div class="text-center text-muted">
                                Belum punya akun? <a href="{{ route('register') }}" class="text-decoration-none" style="color: var(--primary-color); font-weight: bold;">Daftar sekarang</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
