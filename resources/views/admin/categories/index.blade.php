@extends('layouts.app')

@section('title', 'Manajemen Kategori')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold mb-0">Manajemen Kategori</h2>
            <p class="text-muted">Kelola kategori menu untuk mempermudah kasir.</p>
        </div>
        <a href="#" class="btn btn-primary btn-modern px-4">
            <i class="bi bi-plus-circle"></i> Tambah Kategori
        </a>
    </div>

    <div class="card glass-card border-0">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="bg-light text-muted">
                        <tr>
                            <th class="ps-4 py-3 border-0 rounded-top-start">NAMA KATEGORI</th>
                            <th class="py-3 border-0">DESKRIPSI</th>
                            <th class="py-3 border-0 text-center">TOTAL MENU</th>
                            <th class="pe-4 py-3 border-0 rounded-top-end text-end">AKSI</th>
                        </tr>
                    </thead>
                    <tbody class="border-top-0">
                        @forelse($categories as $category)
                            <tr>
                                <td class="ps-4 py-3 fw-semibold">{{ $category->name }}</td>
                                <td class="py-3 text-muted">{{ $category->description ?? '-' }}</td>
                                <td class="py-3 text-center">
                                    <span class="badge bg-secondary rounded-pill px-3">{{ $category->products_count ?? 0 }}</span>
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
                                <td colspan="4" class="text-center py-5 text-muted">Belum ada kategori.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
