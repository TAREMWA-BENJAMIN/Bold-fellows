<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return redirect()->route('admin.dashboard');
    });
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/manage-pages', [AdminController::class, 'managePages'])->name('admin.manage-pages');
    Route::get('/manage-pages/{section}', [AdminController::class, 'editSection'])->name('admin.edit-section');
    Route::post('/manage-pages/{section}', [AdminController::class, 'updateSection'])->name('admin.update-section');
});

Route::get('/{page?}', function ($page = 'index') {
    $page = str_replace(['.php', '.html'], '', $page);
    
    if (view()->exists($page)) {
        return view($page);
    }
    
    abort(404);
})->where('page', '.*');
