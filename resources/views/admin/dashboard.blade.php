@extends('layouts.app')

@section('title', 'Dasbor Backoffice')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold mb-0">Selamat Datang, {{ auth()->user()->name ?? 'Admin' }}! 👋</h2>
            <p class="text-muted">Ringkasan performa restoran Anda hari ini.</p>
        </div>
        <div>
            <form action="{{ route('logout') }}" method="POST" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-outline-danger rounded-pill px-4 btn-modern">Keluar</button>
            </form>
        </div>
    </div>

    <!-- Stats Row -->
    <div class="row g-4 mb-5">
        <div class="col-md-3 col-sm-6">
            <div class="card glass-card border-0 p-4">
                <div class="d-flex justify-content-between align-items-start mb-3">
                    <div>
                        <p class="text-muted mb-1 fw-medium">Total Penjualan</p>
                        <h4 class="fw-bold text-ocean mb-0">Rp 4.500.000</h4>
                    </div>
                    <div class="bg-primary-gradient text-white rounded p-2 shadow-sm">
                        <i class="bi bi-wallet2"></i>
                    </div>
                </div>
                <small class="text-success fw-medium"><i class="bi bi-arrow-up-short"></i> 12% dari kemarin</small>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="card glass-card border-0 p-4">
                <div class="d-flex justify-content-between align-items-start mb-3">
                    <div>
                        <p class="text-muted mb-1 fw-medium">Pesanan Selesai</p>
                        <h4 class="fw-bold text-ocean mb-0">45</h4>
                    </div>
                    <div class="bg-ocean-gradient text-white rounded p-2 shadow-sm">
                        <i class="bi bi-receipt"></i>
                    </div>
                </div>
                <small class="text-success fw-medium"><i class="bi bi-arrow-up-short"></i> 5 pesanan baru</small>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="card glass-card border-0 p-4">
                <div class="d-flex justify-content-between align-items-start mb-3">
                    <div>
                        <p class="text-muted mb-1 fw-medium">Total Menu</p>
                        <h4 class="fw-bold text-ocean mb-0">{{ \App\Models\Product::count() }}</h4>
                    </div>
                    <div class="bg-warning text-dark rounded p-2 shadow-sm">
                        <i class="bi bi-box-seam"></i>
                    </div>
                </div>
                <small class="text-muted fw-medium">Dalam {{ \App\Models\Category::count() }} Kategori</small>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="card glass-card border-0 p-4">
                <div class="d-flex justify-content-between align-items-start mb-3">
                    <div>
                        <p class="text-muted mb-1 fw-medium">Pelanggan Aktif</p>
                        <h4 class="fw-bold text-ocean mb-0">12</h4>
                    </div>
                    <div class="bg-info text-white rounded p-2 shadow-sm">
                        <i class="bi bi-people"></i>
                    </div>
                </div>
                <small class="text-success fw-medium">Sedang makan</small>
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <h5 class="fw-bold mb-3">Aksi Cepat</h5>
    <div class="row g-4">
        <div class="col-md-4">
            <a href="{{ route('pos.index') }}" class="text-decoration-none">
                <div class="card glass-card border-0 p-4 text-center h-100 cursor-pointer">
                    <i class="bi bi-cart-check fs-1 text-primary-theme mb-3"></i>
                    <h5 class="fw-bold text-dark">Buka Kasir (POS)</h5>
                    <p class="text-muted mb-0 small">Mulai melayani pesanan pelanggan.</p>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="{{ route('admin.products.index') }}" class="text-decoration-none">
                <div class="card glass-card border-0 p-4 text-center h-100 cursor-pointer">
                    <i class="bi bi-egg-fried fs-1 text-ocean mb-3"></i>
                    <h5 class="fw-bold text-dark">Kelola Menu</h5>
                    <p class="text-muted mb-0 small">Tambah, ubah, atau hapus menu restoran.</p>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="{{ route('admin.categories.index') }}" class="text-decoration-none">
                <div class="card glass-card border-0 p-4 text-center h-100 cursor-pointer">
                    <i class="bi bi-tags fs-1 text-warning mb-3"></i>
                    <h5 class="fw-bold text-dark">Kelola Kategori</h5>
                    <p class="text-muted mb-0 small">Atur kategori untuk pengelompokan menu.</p>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection
