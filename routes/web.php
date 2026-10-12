<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/about-us', [PageController::class, 'about'])->name('about');
Route::get('/about', fn() => redirect()->route('about'));
Route::get('/contact-us', [PageController::class, 'contact'])->name('contact');
Route::get('/contact', fn() => redirect()->route('contact'));
Route::get('/privacy-policy', [PageController::class, 'privacy'])->name('privacy');
Route::get('/terms-of-service', [PageController::class, 'terms'])->name('terms');

Route::get('/', function () {
    try {
        if (\Illuminate\Support\Facades\Schema::hasTable('products')) {
            $products = \App\Models\Product::active()
                ->orderBy('sort_order', 'asc')
                ->orderBy('id', 'asc')
                ->take(6)
                ->get();
        } else {
            $products = collect();
        }
    } catch (\Throwable $e) {
        $products = collect();
    }

    return view('home', compact('products'));
})->name('home');

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{slug}', [ProductController::class, 'show'])->name('products.show');

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

Route::post('/enquiry', [EnquiryController::class, 'store'])->name('enquiry.store');
