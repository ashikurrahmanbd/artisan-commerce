<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

/**
 * 
 * Rote for the admin
 * 
 */


 Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin-dashboard')->middleware(['auth', 'admin']);

 //Products Routes
 Route::get('admin/dashboard/allproducts', [AdminController::class, 'all_products'])->name('admin_all_products')->middleware(['auth', 'admin']);


 Route::get('admin/dashboard/add-new-products', [AdminController::class, 'add_new_products'])->name('add_new_products')->middleware(['auth', 'admin']);

 Route::get('admin/dashboard/product-categories', [AdminController::class, 'product_categories'])->name('product_categories')->middleware(['auth', 'admin']);

 Route::get('admin/dashboard/ecommerce-settings', [AdminController::class, 'ecommerce_settings'])->name('ecommerce_settings')->middleware(['auth', 'admin']);