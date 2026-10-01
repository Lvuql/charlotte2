<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique();
            $table->string('value');
            $table->string('label')->nullable();
            $table->string('group')->default('general');
            $table->timestamps();
        });

        // Seed default colors based on Charlotte's real venue aesthetic
        DB::table('settings')->insert([
            // Color theme — dark navy teal inspired by Charlotte exterior
            ['key' => 'bg_color',          'value' => '#1a2332', 'label' => 'Warna Latar Utama',        'group' => 'colors', 'created_at' => now(), 'updated_at' => now()],
            ['key' => 'bg_color_light',    'value' => '#f5f0e8', 'label' => 'Warna Latar Terang',       'group' => 'colors', 'created_at' => now(), 'updated_at' => now()],
            ['key' => 'primary_color',     'value' => '#c9956a', 'label' => 'Warna Utama (Rose Gold)',  'group' => 'colors', 'created_at' => now(), 'updated_at' => now()],
            ['key' => 'accent_color',      'value' => '#d4af7a', 'label' => 'Warna Aksen (Champagne)',  'group' => 'colors', 'created_at' => now(), 'updated_at' => now()],
            ['key' => 'dark_color',        'value' => '#0f1a24', 'label' => 'Warna Gelap',              'group' => 'colors', 'created_at' => now(), 'updated_at' => now()],
            ['key' => 'card_bg_color',     'value' => '#ffffff', 'label' => 'Warna Kartu / Panel',      'group' => 'colors', 'created_at' => now(), 'updated_at' => now()],
            ['key' => 'section_bg_color',  'value' => '#f5f0e8', 'label' => 'Warna Section Konten',     'group' => 'colors', 'created_at' => now(), 'updated_at' => now()],
            ['key' => 'text_color',        'value' => '#2c1f14', 'label' => 'Warna Teks',               'group' => 'colors', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
