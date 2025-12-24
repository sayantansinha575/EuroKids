<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\HomeController;



Route::get('/', [HomeController::class, 'index_landing'])->name('home');

Route::get('/preschool-admission', [HomeController::class, 'preschool_admisson'])->name('preschool.admission');

Route::prefix('programs')->group(function () {

    Route::get('/toddler-transition-program', [HomeController::class, 'toddler_program'])->name('program.toddler');
    Route::get('/playgroup', [HomeController::class, 'playgroup_program'])->name('program.playgroup');
    Route::get('/nursery', [HomeController::class, 'nursery_program'])->name('program.nursery');
    Route::get('/eurojunior', [HomeController::class, 'eurojunior_program'])->name('program.eurojunior');
    Route::get('/eurosenior', [HomeController::class, 'eurosenior_program'])->name('program.eurosenior');
});
Route::get('/contact-us', [HomeController::class, 'contact_us'])->name('contact.us');




// admin
Route::prefix('admin')->group(function () {

    Route::get('/dashboard', [AdminController::class, 'index'])
        ->name('dashboard.admin');

    Route::get('/manage-banners', [AdminController::class, 'admin_banners'])
        ->name('banners.admin');

    Route::get('/manage-banners/{id}', [AdminController::class, 'show_banner'])
        ->name('manage.banner');

    Route::post('/manage-banners/store', [AdminController::class, 'store_banner'])
        ->name('banner.store');

    Route::delete('/manage-banners/{id}', [AdminController::class, 'destroy'])
        ->name('delete.banner');

    Route::post('/manage-banners/status', [AdminController::class, 'toggleStatus'])
        ->name('banner.toggle.status');
});

