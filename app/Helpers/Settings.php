<?php

namespace App\Helpers;

class Settings
{
    protected static string $path = '';

    /**
     * Default color palette — inspired by Charlotte's real venue
     * (dark teal exterior + warm gold interior lighting)
     */
    protected static array $defaults = [
        'bg_color'          => '#f5f0e8',  // Warm linen — section content
        'bg_color_dark'     => '#1a2332',  // Deep navy teal — hero, dark sections
        'primary_color'     => '#c9956a',  // Rose gold
        'accent_color'      => '#d4af7a',  // Champagne gold
        'dark_color'        => '#0f1a24',  // Darkest navy
        'card_bg_color'     => '#ffffff',  // Card backgrounds
        'section_bg_color'  => '#f5f0e8',  // Main content sections
        'text_color'        => '#2c1f14',  // Warm espresso text
    ];

    protected static function filePath(): string
    {
        if (static::$path === '') {
            static::$path = storage_path('app/settings.json');
        }
        return static::$path;
    }

    public static function all(): array
    {
        $path = static::filePath();
        if (! file_exists($path)) {
            return static::$defaults;
        }
        $data = json_decode(file_get_contents($path), true);
        return array_merge(static::$defaults, $data ?? []);
    }

    public static function get(string $key, mixed $default = null): mixed
    {
        $all = static::all();
        return $all[$key] ?? $default ?? (static::$defaults[$key] ?? null);
    }

    public static function set(array $values): void
    {
        $existing = static::all();
        $merged = array_merge($existing, $values);
        file_put_contents(static::filePath(), json_encode($merged, JSON_PRETTY_PRINT));
    }

    public static function cssVariables(): string
    {
        $s = static::all();
        return ":root {
  --bg-color: {$s['bg_color']};
  --bg-color-dark: {$s['bg_color_dark']};
  --primary-color: {$s['primary_color']};
  --accent-color: {$s['accent_color']};
  --dark-color: {$s['dark_color']};
  --bg-color-card: {$s['card_bg_color']};
  --bg-color-section-alt: {$s['section_bg_color']};
  --text-color: {$s['text_color']};
  --background-color: {$s['bg_color']};
}";
    }
}
