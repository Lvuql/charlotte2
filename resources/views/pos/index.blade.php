@extends('layouts.app')

@section('title', 'Kasir')

@section('content')
<div class="container-fluid px-4" x-data="cartApp()">
    <div class="row pos-layout">
        <!-- Products Grid -->
        <div class="col-lg-8 pos-items pb-4">
            <!-- Filter Categories -->
            <div class="d-flex gap-2 mb-4 overflow-auto pb-2">
                <button class="btn btn-modern rounded-pill px-4" 
                        :class="activeCategory === 'all' ? 'btn-primary' : 'btn-outline-primary bg-white'"
                        @click="activeCategory = 'all'">
                    Semua
                </button>
                @foreach($categories as $category)
                <button class="btn btn-modern rounded-pill px-4 text-nowrap"
                        :class="activeCategory === {{ $category->id }} ? 'btn-primary' : 'btn-outline-primary bg-white'"
                        @click="activeCategory = {{ $category->id }}">
                    {{ $category->name }}
                </button>
                @endforeach
            </div>

            <!-- Product Cards -->
            <div class="row g-4">
                @foreach($categories as $category)
                    @foreach($category->products as $product)
                        <div class="col-md-4 col-sm-6" x-show="activeCategory === 'all' || activeCategory === {{ $category->id }}">
                            <div class="card glass-card h-100 border-0 cursor-pointer" @click="addToCart({{ $product }})">
                                @if($product->image)
                                    <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top product-img" alt="{{ $product->name }}">
                                @else
                                    <div class="card-img-top product-img bg-secondary d-flex align-items-center justify-content-center text-white opacity-50">
                                        <i class="bi bi-image fs-1"></i>
                                    </div>
                                @endif
                                <div class="card-body d-flex flex-column justify-content-between p-3">
                                    <h5 class="card-title fs-6 fw-bold text-truncate mb-1">{{ $product->name }}</h5>
                                    <p class="card-text text-primary fw-bold mb-0">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>

        <!-- Cart Sidebar -->
        <div class="col-lg-4 h-100">
            <div class="card glass-card h-100 border-0 d-flex flex-column">
                <div class="card-header bg-transparent border-0 pt-4 pb-2 px-4">
                    <h5 class="fw-bold mb-0 d-flex align-items-center gap-2">
                        <i class="bi bi-receipt text-primary"></i> Pesanan Saat Ini
                    </h5>
                </div>
                
                <div class="card-body d-flex flex-column px-4">
                    <!-- Customer Info -->
                    <div class="mb-3">
                        <input type="text" x-model="customerName" class="form-control form-control-lg border-0 shadow-sm" placeholder="Nama Pelanggan (Opsional)">
                    </div>

                    <!-- Items -->
                    <div class="cart-items mb-3 pe-2">
                        <template x-if="cart.length === 0">
                            <div class="text-center text-muted mt-5 pt-5">
                                <i class="bi bi-cart-x fs-1 mb-2 d-block opacity-50"></i>
                                <p>Keranjang masih kosong</p>
                            </div>
                        </template>
                        
                        <template x-for="(item, index) in cart" :key="item.id">
                            <div class="d-flex justify-content-between align-items-center mb-3 bg-white p-2 rounded shadow-sm">
                                <div class="d-flex flex-column w-50">
                                    <span class="fw-semibold text-truncate" x-text="item.name"></span>
                                    <span class="text-primary small">Rp <span x-text="formatRupiah(item.price)"></span></span>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <button class="btn btn-sm btn-outline-secondary rounded-circle px-2 py-0" @click="decreaseQty(index)"><i class="bi bi-dash"></i></button>
                                    <span class="fw-bold px-1" x-text="item.quantity"></span>
                                    <button class="btn btn-sm btn-outline-secondary rounded-circle px-2 py-0" @click="increaseQty(index)"><i class="bi bi-plus"></i></button>
                                </div>
                                <div class="text-end" style="width: 80px;">
                                    <span class="fw-bold">Rp <span x-text="formatRupiah(item.price * item.quantity)"></span></span>
                                </div>
                            </div>
                        </template>
                    </div>

                    <!-- Total & Checkout -->
                    <div class="cart-total mt-auto">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="text-muted">Subtotal</span>
                            <span class="fw-semibold">Rp <span x-text="formatRupiah(subtotal)"></span></span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-muted">Pajak (10%)</span>
                            <span class="fw-semibold">Rp <span x-text="formatRupiah(tax)"></span></span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <span class="fs-5 fw-bold">Total</span>
                            <span class="fs-4 fw-bold text-primary">Rp <span x-text="formatRupiah(total)"></span></span>
                        </div>
                        
                        <button class="btn btn-primary btn-lg btn-modern w-100 py-3 d-flex justify-content-center align-items-center gap-2" 
                                :disabled="cart.length === 0 || isProcessing"
                                @click="checkout()">
                            <i class="bi" :class="isProcessing ? 'bi-hourglass-split' : 'bi-check-circle'"></i>
                            <span x-text="isProcessing ? 'Memproses...' : 'Checkout & Bayar'"></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
<script>
    function cartApp() {
        return {
            activeCategory: 'all',
            cart: [],
            customerName: '',
            isProcessing: false,
            
            addToCart(product) {
                const existingIndex = this.cart.findIndex(item => item.id === product.id);
                if (existingIndex > -1) {
                    this.cart[existingIndex].quantity++;
                } else {
                    this.cart.push({
                        ...product,
                        quantity: 1
                    });
                }
            },
            
            increaseQty(index) {
                this.cart[index].quantity++;
            },
            
            decreaseQty(index) {
                if (this.cart[index].quantity > 1) {
                    this.cart[index].quantity--;
                } else {
                    this.cart.splice(index, 1);
                }
            },
            
            get subtotal() {
                return this.cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
            },
            
            get tax() {
                return this.subtotal * 0.1; // 10% tax
            },
            
            get total() {
                return this.subtotal + this.tax;
            },
            
            formatRupiah(number) {
                return new Intl.NumberFormat('id-ID').format(number);
            },
            
            async checkout() {
                if (this.cart.length === 0) return;
                
                this.isProcessing = true;
                
                try {
                    const response = await fetch('{{ route('pos.checkout') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({
                            customer_name: this.customerName,
                            cart: this.cart,
                            payment_method: 'cash'
                        })
                    });
                    
                    if (response.ok) {
                        alert('Transaksi Berhasil!');
                        this.cart = [];
                        this.customerName = '';
                    } else {
                        alert('Terjadi kesalahan saat memproses transaksi.');
                    }
                } catch (error) {
                    console.error('Error:', error);
                    alert('Gagal terhubung ke server.');
                } finally {
                    this.isProcessing = false;
                }
            }
        }
    }
</script>
<style>
    .cursor-pointer { cursor: pointer; }
    .pos-items { scrollbar-width: thin; }
    .cart-items { scrollbar-width: thin; }
</style>
@endpush
