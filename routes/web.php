<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/services/outsourcing', function () {
    return view('services.outsourcing');
})->name('services.outsourcing');

Route::get('/services/financial-operations', function () {
    return view('services.financial-operations');
})->name('services.financial-operations');

Route::get('/services/audit', function () {
    return view('services.audit');
})->name('services.audit');

Route::get('/services/digital-transformation', function () {
    return view('services.digital-transformation');
})->name('services.digital-transformation');

Route::get('/company-incorporation', function () {
    return view('services.company-incorporation');
})->name('services.company-incorporation');


Route::get('/blog', [App\Http\Controllers\BlogController::class, 'index'])->name('blog.index');
Route::middleware(['auth'])->group(function () {
    Route::get('/blog/create', [App\Http\Controllers\BlogController::class, 'create'])->name('blog.create');
    Route::post('/blog', [App\Http\Controllers\BlogController::class, 'store'])->name('blog.store');
    Route::get('/blog/{id}/edit', [App\Http\Controllers\BlogController::class, 'edit'])->name('blog.edit');
    Route::put('/blog/{id}', [App\Http\Controllers\BlogController::class, 'update'])->name('blog.update');
    Route::delete('/blog/{id}', [App\Http\Controllers\BlogController::class, 'destroy'])->name('blog.destroy');
});
Route::get('/blog/{slug}', [App\Http\Controllers\BlogController::class, 'show'])->name('blog.show');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');


use App\Http\Controllers\Auth\AuthController;

Route::middleware('guest')->group(function () {
    Route::view('/login', 'auth.login')->name('login');
    Route::post('/login', [AuthController::class, 'login']);

    Route::view('/register', 'auth.register')->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');
