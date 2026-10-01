<?php

namespace App\Http\Controllers;

use App\Helpers\Settings;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index()
    {
        $settings = Settings::all();

        $colorFields = [
            'bg_color'         => ['label' => 'Warna Latar Section Konten',   'hint' => 'Background halaman utama (area cream/putih)'],
            'bg_color_dark'    => ['label' => 'Warna Latar Gelap (Hero)',      'hint' => 'Background section hero & navbar (dark)'],
            'primary_color'    => ['label' => 'Warna Utama (Rose Gold)',       'hint' => 'Warna tombol, ikon, aksen utama'],
            'accent_color'     => ['label' => 'Warna Aksen (Champagne)',       'hint' => 'Warna hover, gradient, harga'],
            'dark_color'       => ['label' => 'Warna Gelap Terdalam',          'hint' => 'Background section paling gelap'],
            'card_bg_color'    => ['label' => 'Warna Kartu / Panel',           'hint' => 'Background card paket & menu'],
            'section_bg_color' => ['label' => 'Warna Section Alternating',     'hint' => 'Section selang-seling (zebra pattern)'],
            'text_color'       => ['label' => 'Warna Teks Utama',              'hint' => 'Warna teks konten, paragraf'],
        ];

        $presets = [
            'Charlotte Original (Navy Teal)' => [
                'bg_color'         => '#f5f0e8',
                'bg_color_dark'    => '#1a2d3d',
                'primary_color'    => '#c9956a',
                'accent_color'     => '#d4af7a',
                'dark_color'       => '#0f1a24',
                'card_bg_color'    => '#ffffff',
                'section_bg_color' => '#f5f0e8',
                'text_color'       => '#2c1f14',
            ],
            'Warm Cream (Default)' => [
                'bg_color'         => '#fdf8f4',
                'bg_color_dark'    => '#2c1f14',
                'primary_color'    => '#c9956a',
                'accent_color'     => '#d4af7a',
                'dark_color'       => '#1e1a17',
                'card_bg_color'    => '#ffffff',
                'section_bg_color' => '#faf5f0',
                'text_color'       => '#3d2b1f',
            ],
            'Dark Elegant (Black Gold)' => [
                'bg_color'         => '#f8f4ef',
                'bg_color_dark'    => '#111111',
                'primary_color'    => '#c9956a',
                'accent_color'     => '#e8c97a',
                'dark_color'       => '#000000',
                'card_bg_color'    => '#ffffff',
                'section_bg_color' => '#f0ebe4',
                'text_color'       => '#1a1a1a',
            ],
            'Sage & Gold (Green)' => [
                'bg_color'         => '#f0f4f0',
                'bg_color_dark'    => '#2a3d2a',
                'primary_color'    => '#8a9e6e',
                'accent_color'     => '#d4af7a',
                'dark_color'       => '#1a2a1a',
                'card_bg_color'    => '#ffffff',
                'section_bg_color' => '#e8f0e8',
                'text_color'       => '#2a3a2a',
            ],
            'Blush Rose (Pink)' => [
                'bg_color'         => '#fdf0f0',
                'bg_color_dark'    => '#3d1f2c',
                'primary_color'    => '#c9708a',
                'accent_color'     => '#e8a0b0',
                'dark_color'       => '#2a1020',
                'card_bg_color'    => '#ffffff',
                'section_bg_color' => '#fae8ec',
                'text_color'       => '#3d1f2c',
            ],
        ];

        return view('admin.settings', compact('settings', 'colorFields', 'presets'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'bg_color'         => ['required', 'regex:/^#[0-9A-Fa-f]{6}$/'],
            'bg_color_dark'    => ['required', 'regex:/^#[0-9A-Fa-f]{6}$/'],
            'primary_color'    => ['required', 'regex:/^#[0-9A-Fa-f]{6}$/'],
            'accent_color'     => ['required', 'regex:/^#[0-9A-Fa-f]{6}$/'],
            'dark_color'       => ['required', 'regex:/^#[0-9A-Fa-f]{6}$/'],
            'card_bg_color'    => ['required', 'regex:/^#[0-9A-Fa-f]{6}$/'],
            'section_bg_color' => ['required', 'regex:/^#[0-9A-Fa-f]{6}$/'],
            'text_color'       => ['required', 'regex:/^#[0-9A-Fa-f]{6}$/'],
        ]);

        Settings::set($validated);

        return redirect()->route('admin.settings')
            ->with('success', 'Pengaturan warna berhasil disimpan! ✨');
    }
}
