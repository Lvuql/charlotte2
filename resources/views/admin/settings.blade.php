@extends('layouts.app')
@section('content')

<style>
.color-settings-page {
    background: #f8f9fa;
    min-height: 100vh;
    padding: 24px;
}

.settings-header {
    background: linear-gradient(135deg, #1a2d3d 0%, #0f1a24 100%);
    border-radius: 16px;
    padding: 32px 40px;
    margin-bottom: 32px;
    color: white;
    position: relative;
    overflow: hidden;
}

.settings-header::before {
    content: '';
    position: absolute;
    top: -40px; right: -40px;
    width: 200px; height: 200px;
    background: radial-gradient(circle, rgba(201,149,106,0.2) 0%, transparent 70%);
    border-radius: 50%;
}

.settings-header h1 {
    font-size: 1.8rem;
    font-weight: 700;
    margin: 0;
    color: white;
}

.settings-header p {
    margin: 8px 0 0;
    color: rgba(255,255,255,0.65);
    font-size: 0.95rem;
}

.settings-card {
    background: white;
    border-radius: 16px;
    box-shadow: 0 2px 20px rgba(0,0,0,0.06);
    overflow: hidden;
    margin-bottom: 24px;
}

.settings-card-header {
    padding: 20px 28px;
    border-bottom: 1px solid #f0f0f0;
    display: flex;
    align-items: center;
    gap: 12px;
}

.settings-card-header .icon {
    width: 40px; height: 40px;
    background: linear-gradient(135deg, #c9956a, #d4af7a);
    border-radius: 10px;
    display: flex; align-items: center; justify-content: center;
    color: white;
    font-size: 1rem;
    flex-shrink: 0;
}

.settings-card-header h2 {
    font-size: 1.05rem;
    font-weight: 700;
    margin: 0;
    color: #1a1a2e;
}

.settings-card-header p {
    font-size: 0.8rem;
    color: #888;
    margin: 2px 0 0;
}

.settings-card-body {
    padding: 28px;
}

/* Color field */
.color-field-row {
    display: flex;
    align-items: center;
    gap: 16px;
    padding: 16px 0;
    border-bottom: 1px solid #f5f5f5;
}

.color-field-row:last-child { border-bottom: none; }

.color-swatch-wrapper {
    position: relative;
    flex-shrink: 0;
}

.color-swatch-wrapper input[type="color"] {
    width: 52px; height: 52px;
    border: none;
    border-radius: 12px;
    cursor: pointer;
    padding: 4px;
    background: white;
    box-shadow: 0 2px 8px rgba(0,0,0,0.12);
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.color-swatch-wrapper input[type="color"]:hover {
    transform: scale(1.05);
    box-shadow: 0 4px 16px rgba(0,0,0,0.18);
}

.color-field-info { flex: 1; }
.color-field-info label {
    font-weight: 600;
    font-size: 0.9rem;
    color: #1a1a2e;
    display: block;
    margin-bottom: 2px;
}

.color-field-info .hint {
    font-size: 0.78rem;
    color: #999;
}

.color-hex-input {
    font-family: 'Courier New', monospace;
    font-size: 0.85rem;
    border: 2px solid #e8e8e8;
    border-radius: 8px;
    padding: 8px 12px;
    width: 110px;
    color: #333;
    transition: border-color 0.2s;
    text-transform: uppercase;
}

.color-hex-input:focus {
    outline: none;
    border-color: #c9956a;
}

/* Preview strip */
.preview-strip {
    height: 10px;
    border-radius: 5px;
    margin-top: 4px;
    transition: background 0.3s;
}

/* Presets */
.preset-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
    gap: 12px;
}

.preset-btn {
    border: 2px solid transparent;
    border-radius: 12px;
    padding: 14px 16px;
    cursor: pointer;
    transition: all 0.2s ease;
    text-align: left;
    background: white;
    box-shadow: 0 2px 8px rgba(0,0,0,0.06);
}

.preset-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(0,0,0,0.1);
    border-color: #c9956a;
}

.preset-btn.active {
    border-color: #c9956a;
    background: #fffaf7;
}

.preset-swatches {
    display: flex;
    gap: 4px;
    margin-bottom: 8px;
}

.preset-swatch {
    width: 20px; height: 20px;
    border-radius: 4px;
    border: 1px solid rgba(0,0,0,0.08);
}

.preset-name {
    font-size: 0.8rem;
    font-weight: 600;
    color: #333;
    line-height: 1.3;
}

/* Live preview */
.live-preview {
    position: sticky;
    top: 24px;
}

.preview-card {
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 4px 24px rgba(0,0,0,0.12);
}

.preview-nav {
    padding: 12px 20px;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.preview-nav-brand {
    font-size: 0.85rem;
    font-weight: 700;
    letter-spacing: 2px;
}

.preview-hero {
    padding: 40px 20px;
    text-align: center;
}

.preview-hero h2 {
    font-size: 1.4rem;
    font-weight: 300;
    letter-spacing: 3px;
    margin: 0 0 8px;
}

.preview-hero p { font-size: 0.78rem; opacity: 0.7; margin: 0; }

.preview-content {
    padding: 20px;
}

.preview-section-title {
    font-size: 0.7rem;
    letter-spacing: 3px;
    text-transform: uppercase;
    opacity: 0.6;
    margin-bottom: 4px;
}

.preview-cards {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 8px;
    margin-top: 12px;
}

.preview-card-item {
    border-radius: 8px;
    padding: 12px;
    font-size: 0.72rem;
}

.preview-pill {
    display: inline-block;
    padding: 4px 12px;
    border-radius: 20px;
    font-size: 0.7rem;
    font-weight: 600;
    margin-top: 12px;
}

/* Save button */
.btn-save {
    background: linear-gradient(135deg, #c9956a, #d4af7a);
    color: white;
    border: none;
    padding: 14px 40px;
    border-radius: 10px;
    font-weight: 700;
    font-size: 0.95rem;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(201,149,106,0.4);
}

.btn-save:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(201,149,106,0.5);
}

.alert-success-custom {
    background: linear-gradient(135deg, #c9956a, #d4af7a);
    color: white;
    border: none;
    border-radius: 12px;
    padding: 16px 24px;
    margin-bottom: 24px;
    display: flex;
    align-items: center;
    gap: 12px;
    font-weight: 600;
}
</style>

<div class="color-settings-page">

    {{-- Header --}}
    <div class="settings-header">
        <div style="position: relative; z-index: 1;">
            <h1><i class="fas fa-palette me-2" style="color: #d4af7a;"></i>Pengaturan Tema Warna</h1>
            <p>Kustomisasi warna Charlotte sesuai suasana yang Anda inginkan. Perubahan langsung diterapkan ke seluruh halaman.</p>
        </div>
    </div>

    @if(session('success'))
    <div class="alert-success-custom">
        <i class="fas fa-check-circle fa-lg"></i>
        {{ session('success') }}
    </div>
    @endif

    <form method="POST" action="{{ route('admin.settings.update') }}" id="colorForm">
        @csrf

        <div class="row g-4">

            {{-- Left: Controls --}}
            <div class="col-lg-8">

                {{-- Preset Themes --}}
                <div class="settings-card mb-4">
                    <div class="settings-card-header">
                        <div class="icon"><i class="fas fa-wand-magic-sparkles"></i></div>
                        <div>
                            <h2>Preset Tema</h2>
                            <p>Pilih tema siap pakai, lalu sesuaikan detail warna di bawah</p>
                        </div>
                    </div>
                    <div class="settings-card-body">
                        <div class="preset-grid">
                            @foreach($presets as $presetName => $presetColors)
                            <button type="button" class="preset-btn"
                                data-preset="{{ json_encode($presetColors) }}"
                                onclick="applyPreset(this)">
                                <div class="preset-swatches">
                                    <div class="preset-swatch" style="background: {{ $presetColors['bg_color_dark'] }}"></div>
                                    <div class="preset-swatch" style="background: {{ $presetColors['primary_color'] }}"></div>
                                    <div class="preset-swatch" style="background: {{ $presetColors['bg_color'] }}"></div>
                                    <div class="preset-swatch" style="background: {{ $presetColors['accent_color'] }}"></div>
                                </div>
                                <div class="preset-name">{{ $presetName }}</div>
                            </button>
                            @endforeach
                        </div>
                    </div>
                </div>

                {{-- Color Fields --}}
                <div class="settings-card">
                    <div class="settings-card-header">
                        <div class="icon"><i class="fas fa-droplet"></i></div>
                        <div>
                            <h2>Warna Custom</h2>
                            <p>Klik warna untuk membuka color picker, atau ketik kode hex langsung</p>
                        </div>
                    </div>
                    <div class="settings-card-body">
                        @foreach($colorFields as $key => $field)
                        <div class="color-field-row" data-key="{{ $key }}">
                            <div class="color-swatch-wrapper">
                                <input type="color"
                                    id="picker_{{ $key }}"
                                    value="{{ $settings[$key] ?? '#000000' }}"
                                    oninput="syncColor('{{ $key }}', this.value)">
                            </div>
                            <div class="color-field-info">
                                <label for="picker_{{ $key }}">{{ $field['label'] }}</label>
                                <div class="hint">{{ $field['hint'] }}</div>
                            </div>
                            <input type="text"
                                name="{{ $key }}"
                                id="hex_{{ $key }}"
                                class="color-hex-input"
                                value="{{ strtoupper($settings[$key] ?? '#000000') }}"
                                maxlength="7"
                                oninput="syncHex('{{ $key }}', this.value)"
                                placeholder="#000000">
                        </div>
                        @endforeach
                    </div>
                </div>

                {{-- Save --}}
                <div class="d-flex justify-content-end mt-4">
                    <button type="submit" class="btn-save">
                        <i class="fas fa-floppy-disk me-2"></i>Simpan Pengaturan
                    </button>
                </div>
            </div>

            {{-- Right: Live Preview --}}
            <div class="col-lg-4">
                <div class="live-preview">
                    <div class="settings-card mb-3">
                        <div class="settings-card-header">
                            <div class="icon"><i class="fas fa-eye"></i></div>
                            <div><h2>Preview Langsung</h2><p>Berubah otomatis saat Anda edit</p></div>
                        </div>
                    </div>

                    <div class="preview-card" id="livePreview">
                        {{-- Navbar --}}
                        <div class="preview-nav" id="prev-nav">
                            <span class="preview-nav-brand" id="prev-brand" style="color: #d4af7a;">CHARLOTTE</span>
                            <div style="display:flex; gap:12px; font-size:0.7rem;" id="prev-navlinks">
                                <span>Home</span><span>Menu</span><span>Kontak</span>
                            </div>
                        </div>

                        {{-- Hero --}}
                        <div class="preview-hero" id="prev-hero">
                            <p class="preview-section-title" id="prev-tagline">✦ Fine Dining · Padang ✦</p>
                            <h2 id="prev-h2">Charlotte</h2>
                            <p id="prev-subtext">Pengalaman bersantap yang elegan</p>
                            <span class="preview-pill" id="prev-pill">Reservasi →</span>
                        </div>

                        {{-- Content --}}
                        <div class="preview-content" id="prev-content">
                            <div class="preview-section-title" id="prev-section-title">Paket Spesial</div>
                            <div class="preview-cards">
                                <div class="preview-card-item" id="prev-card1">
                                    <strong>Sweet Brew Pair</strong><br>
                                    <span style="font-size:0.65rem;">Rp 63.000</span>
                                </div>
                                <div class="preview-card-item" id="prev-card2" style="color:white;">
                                    <strong>Ceremonial Matcha</strong><br>
                                    <span style="font-size:0.65rem;">Rp 300.000</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Reset --}}
                    <button type="button" class="btn btn-outline-secondary w-100 mt-3"
                        onclick="resetToDefault()" style="border-radius:10px; font-size:0.85rem;">
                        <i class="fas fa-rotate-left me-1"></i> Reset ke Default Charlotte
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>

<script>
const defaultColors = {
    bg_color:         '#f5f0e8',
    bg_color_dark:    '#1a2d3d',
    primary_color:    '#c9956a',
    accent_color:     '#d4af7a',
    dark_color:       '#0f1a24',
    card_bg_color:    '#ffffff',
    section_bg_color: '#f5f0e8',
    text_color:       '#2c1f14',
};

function getColors() {
    return {
        bg_color:         document.getElementById('hex_bg_color')?.value || '#f5f0e8',
        bg_color_dark:    document.getElementById('hex_bg_color_dark')?.value || '#1a2d3d',
        primary_color:    document.getElementById('hex_primary_color')?.value || '#c9956a',
        accent_color:     document.getElementById('hex_accent_color')?.value || '#d4af7a',
        dark_color:       document.getElementById('hex_dark_color')?.value || '#0f1a24',
        card_bg_color:    document.getElementById('hex_card_bg_color')?.value || '#ffffff',
        section_bg_color: document.getElementById('hex_section_bg_color')?.value || '#f5f0e8',
        text_color:       document.getElementById('hex_text_color')?.value || '#2c1f14',
    };
}

function updatePreview() {
    const c = getColors();

    // Navbar
    document.getElementById('prev-nav').style.background = c.bg_color_dark;
    document.getElementById('prev-navlinks').style.color = 'rgba(255,255,255,0.7)';
    document.getElementById('prev-brand').style.color = c.accent_color;

    // Hero
    document.getElementById('prev-hero').style.background = c.bg_color_dark;
    document.getElementById('prev-hero').style.color = 'rgba(255,255,255,0.9)';
    document.getElementById('prev-tagline').style.color = c.primary_color;
    document.getElementById('prev-h2').style.color = 'white';
    document.getElementById('prev-subtext').style.color = 'rgba(255,255,255,0.6)';
    document.getElementById('prev-pill').style.background = c.primary_color;
    document.getElementById('prev-pill').style.color = 'white';

    // Content section
    document.getElementById('prev-content').style.background = c.bg_color;
    document.getElementById('prev-section-title').style.color = c.primary_color;

    // Cards
    document.getElementById('prev-card1').style.background = c.card_bg_color;
    document.getElementById('prev-card1').style.color = c.text_color;
    document.getElementById('prev-card1').style.border = `1px solid ${c.primary_color}40`;

    document.getElementById('prev-card2').style.background = c.dark_color;
    document.getElementById('prev-card2').style.color = 'white';
}

function syncColor(key, value) {
    const hexInput = document.getElementById('hex_' + key);
    if (hexInput) {
        hexInput.value = value.toUpperCase();
    }
    updatePreview();
}

function syncHex(key, value) {
    if (/^#[0-9A-Fa-f]{6}$/.test(value)) {
        const picker = document.getElementById('picker_' + key);
        if (picker) picker.value = value;
        updatePreview();
    }
}

function applyPreset(btn) {
    document.querySelectorAll('.preset-btn').forEach(b => b.classList.remove('active'));
    btn.classList.add('active');

    const colors = JSON.parse(btn.dataset.preset);
    Object.entries(colors).forEach(([key, value]) => {
        const picker = document.getElementById('picker_' + key);
        const hex    = document.getElementById('hex_'    + key);
        if (picker) picker.value = value;
        if (hex)    hex.value    = value.toUpperCase();
    });
    updatePreview();
}

function resetToDefault() {
    Object.entries(defaultColors).forEach(([key, value]) => {
        const picker = document.getElementById('picker_' + key);
        const hex    = document.getElementById('hex_'    + key);
        if (picker) picker.value = value;
        if (hex)    hex.value    = value.toUpperCase();
    });
    document.querySelectorAll('.preset-btn').forEach(b => b.classList.remove('active'));
    updatePreview();
}

// Init
document.addEventListener('DOMContentLoaded', updatePreview);
</script>

@endsection
