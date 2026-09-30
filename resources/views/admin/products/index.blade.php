@extends('layouts.app')

@section('title', 'Manajemen Produk')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold mb-0">Manajemen Produk</h2>
            <p class="text-muted">Kelola daftar menu dan harga di sini.</p>
        </div>
        <a href="#" class="btn btn-primary btn-modern px-4">
            <i class="bi bi-plus-circle"></i> Tambah Produk
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm" role="alert">
            <i class="bi bi-check-circle-fill me-2"></i> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card glass-card border-0">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="bg-light text-muted">
                        <tr>
                            <th class="ps-4 py-3 border-0 rounded-top-start">NAMA MENU</th>
                            <th class="py-3 border-0">KATEGORI</th>
                            <th class="py-3 border-0">HARGA</th>
                            <th class="py-3 border-0 text-center">STATUS</th>
                            <th class="pe-4 py-3 border-0 rounded-top-end text-end">AKSI</th>
                        </tr>
                    </thead>
                    <tbody class="border-top-0">
                        @forelse($products as $product)
                            <tr>
                                <td class="ps-4 py-3">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="bg-secondary bg-opacity-10 rounded p-2 text-secondary d-flex align-items-center justify-content-center" style="width: 48px; height: 48px;">
                                            <i class="bi bi-cup-hot fs-4"></i>
                                        </div>
                                        <div>
                                            <h6 class="mb-0 fw-semibold">{{ $product->name }}</h6>
                                            <small class="text-muted">{{ Str::limit($product->description, 40) }}</small>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-3">
                                    <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 rounded-pill">
                                        {{ $product->category->name ?? '-' }}
                                    </span>
                                </td>
                                <td class="py-3 fw-medium">Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                                <td class="py-3 text-center">
                                    @if($product->is_available)
                                        <span class="badge bg-success bg-opacity-10 text-success border border-success px-2 py-1"><i class="bi bi-check"></i> Tersedia</span>
                                    @else
                                        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger px-2 py-1"><i class="bi bi-x"></i> Habis</span>
                                    @endif
                                </td>
                                <td class="pe-4 py-3 text-end">
                                    <div class="btn-group shadow-sm rounded-pill">
                                        <a href="#" class="btn btn-sm btn-light border-0"><i class="bi bi-pencil"></i></a>
                                        <button type="button" class="btn btn-sm btn-light border-0 text-danger"><i class="bi bi-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center py-5 text-muted">
                                    <i class="bi bi-inbox fs-1 d-block mb-3 opacity-50"></i>
                                    Belum ada produk yang ditambahkan.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer bg-transparent border-0 p-4">
            {{ $products->links('pagination::bootstrap-5') }}
        </div>
    </div>
</div>
@endsection
