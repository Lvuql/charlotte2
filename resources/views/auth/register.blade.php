@extends('layouts.app')

@section('content')
<section class="banner py-5" style="background: url('{{ asset('assets/images/banner-img.png') }}') center/cover; min-height: 400px; display:flex; align-items:center;">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5" data-aos="fade-up">
                <div class="card shadow-lg border-0" style="background: rgba(255,255,255,0.95); border-radius: 15px;">
                    <div class="card-body p-5">
                        <div class="text-center mb-4">
                            <h3 class="fw-bold text-dark mb-2">Buat Akun Baru</h3>
                            <p class="text-muted">Bergabunglah dengan Restoran kami</p>
                        </div>

                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="Nama Lengkap" required autofocus>
                                <label for="name" class="text-muted">Nama Lengkap</label>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-floating mb-3">
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="name@example.com" required>
                                <label for="email" class="text-muted">Alamat Email</label>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-floating mb-3">
                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password" required>
                                <label for="password" class="text-muted">Kata Sandi</label>
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-floating mb-4">
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Konfirmasi Password" required>
                                <label for="password_confirmation" class="text-muted">Konfirmasi Sandi</label>
                            </div>

                            <button type="submit" class="btn w-100 mb-4" style="background-color: var(--primary-color); color: white; border-radius: 30px; padding: 12px; font-weight: bold;">Daftar Akun</button>

                            <div class="text-center text-muted">
                                Sudah punya akun? <a href="{{ route('login') }}" class="text-decoration-none" style="color: var(--primary-color); font-weight: bold;">Masuk di sini</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
