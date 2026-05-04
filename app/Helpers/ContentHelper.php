<?php

use App\Models\FrontendContent;
use Illuminate\Support\Facades\Cache;

if (!function_exists('get_content')) {
    /**
     * Get frontend content by section and key.
     * Uses caching to reduce database queries.
     *
     * @param string $section
     * @param string $key
     * @param string $default
     * @return string
     */
    function get_content($section, $key, $default = '')
    {
        // Cache the content forever (until updated)
        $value = Cache::rememberForever("frontend_content_{$section}_{$key}", function () use ($section, $key) {
            $content = FrontendContent::where('section', $section)
                ->where('key', $key)
                ->first();
                
            return $content ? $content->value : null;
        });

        return $value ?? $default;
    }
}
