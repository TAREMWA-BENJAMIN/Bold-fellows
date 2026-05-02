<?php

use Illuminate\Support\Facades\Route;

Route::get('/{page?}', function ($page = 'index') {
    $page = str_replace(['.php', '.html'], '', $page);
    
    if (view()->exists($page)) {
        return view($page);
    }
    
    abort(404);
})->where('page', '.*');
