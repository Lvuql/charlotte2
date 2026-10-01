<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="border-radius: 12px; border: none; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
            <div class="modal-header border-0 pb-0 justify-content-center position-relative mt-4">
                <h5 class="modal-title" id="loginModalLabel" style="font-family: 'Cormorant Garamond', serif; font-size: 1.8rem; font-weight: 700; color: var(--primary-color);">Masuk ke Akun</h5>
                <button type="button" class="btn-close position-absolute end-0 top-0 me-3 mt-3" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4 pt-2">
                <p class="text-center text-muted mb-4" style="font-size: 0.9rem;">Silakan masuk untuk melanjutkan reservasi atau melihat pesanan Anda.</p>
                
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label" style="font-weight: 600; font-size: 0.9rem;">Email Address</label>
                        <input type="email" class="form-control py-2" id="email" name="email" placeholder="nama@email.com" required style="border-radius: 8px;">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label" style="font-weight: 600; font-size: 0.9rem;">Password</label>
                        <input type="password" class="form-control py-2" id="password" name="password" placeholder="••••••••" required style="border-radius: 8px;">
                    </div>
                    
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="remember" name="remember">
                            <label class="form-check-label" for="remember" style="font-size: 0.85rem;">Ingat Saya</label>
                        </div>
                        <a href="#" style="font-size: 0.85rem; color: var(--primary-color); text-decoration: none;">Lupa Password?</a>
                    </div>
                    
                    <button type="submit" class="btn w-100 py-2 mb-3" style="background-color: var(--primary-color); color: white; border-radius: 8px; font-weight: 600;">Login</button>
                    
                    <div class="text-center mb-3">
                        <span style="font-size: 0.85rem; color: #888;">Atau masuk dengan</span>
                    </div>
                    
                    <a href="{{ route('google.login') }}" class="btn w-100 py-2 mb-3" style="background-color: white; border: 1px solid #ddd; color: #333; border-radius: 8px; font-weight: 600; display: flex; align-items: center; justify-content: center; gap: 10px;">
                        <img src="https://www.google.com/favicon.ico" alt="Google" width="16" height="16">
                        Google
                    </a>
                    
                    <div class="text-center mt-3">
                        <p style="font-size: 0.85rem; margin-bottom: 0;">Belum punya akun? <a href="{{ route('register') }}" style="color: var(--primary-color); font-weight: 600; text-decoration: none;">Daftar Sekarang</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
