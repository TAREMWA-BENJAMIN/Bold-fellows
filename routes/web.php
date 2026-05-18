<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return redirect()->route('admin.dashboard');
    });
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/manage-pages', [AdminController::class, 'managePages'])->name('admin.manage-pages');
    Route::get('/manage-pages/{section}', [AdminController::class, 'editSection'])->name('admin.edit-section')->where('section', '[^/]+');
    Route::post('/manage-pages/{section}', [AdminController::class, 'updateSection'])->name('admin.update-section')->where('section', '[^/]+');
});

Route::get('/{page?}', function ($page = 'index') {
    $page = str_replace(['.php', '.html'], '', $page);

    // Map view names to section names
    $sectionMap = [
        'index'                              => 'Home',
        'about'                              => 'About Us',
        'services'                           => 'Our Services',
        'products'                           => 'Products',
        'contact'                            => 'Contact',
        // Services
        'app-software-development'           => 'App & Software Development',
        'software-supplies-maintenance'      => 'Software Supplies & Maintenance',
        'web-hosting'                        => 'Web Hosting',
        'penetration-testing'                => 'Penetration Testing',
        'it-consultancy-advisory'            => 'IT Consultancy & Advisory',
        'cybersecurity-services'             => 'Cybersecurity Services',
        // Products
        'personal-budgeting-planning-system' => 'Personal Budgeting & Planning System',
        'lending-saving-system'              => 'Lending & Saving System',
        'inventory-management-system'        => 'Inventory Management System',
        'e-learning-system'                  => 'E-Learning System',
        'point-of-sale-system'               => 'Point of Sale System',
        'payment-processing-system'          => 'Payment Processing System',
        'hospital-clinic-management-system'  => 'Hospital/Clinic Management System',
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
