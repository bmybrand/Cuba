<?php

use Illuminate\Support\Facades\Route;

// Public pages wired to their Blade views
Route::view('/', 'sendlovetocuba')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/shop', 'shopproducts')->name('shop');
Route::view('/categories', 'catagories')->name('categories');
Route::get('/catagories', function () {
    $q = request()->getQueryString();

    return redirect('/categories' . ($q !== null && $q !== '' ? '?' . $q : ''), 301);
});
Route::view('/how-it-works', 'howitworks')->name('howitworks');
Route::view('/faq', "faq's")->name('faq');
Route::view('/contact', 'contact')->name('contact');
Route::view('/cart', 'cart')->name('cart');
Route::view('/checkout', 'checkout')->name('checkout');
Route::view('/wishlist', 'wishlist')->name('wishlist');
Route::view('/login', 'login')->name('login');
