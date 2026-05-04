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
    
    // Map view names to section names
    $sectionMap = [
        'index' => 'Home',
        'about' => 'About Us',
        'services' => 'Our Services',
        'products' => 'Products',
        'contact' => 'Contact'
    ];
    
    if (view()->exists($page)) {
        $sectionName = $sectionMap[$page] ?? null;
        $content = [];
        if ($sectionName) {
            $content = \App\Models\FrontendContent::where('section', $sectionName)->get()->keyBy('key');
        }
        
        // Always fetch Footer content
        $footerContent = \App\Models\FrontendContent::where('section', 'Footer Section')->get()->keyBy('key');
        
        return view($page, compact('content', 'footerContent'));
    }
    
    abort(404);
})->where('page', '.*');
