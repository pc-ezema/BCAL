<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [Controller::class, 'index'])->name('index');
Route::get('/about', [Controller::class, 'about'])->name('about');
Route::get('/contact', [Controller::class, 'contact'])->name('contact');
Route::get('/faqs', [Controller::class, 'faqs'])->name('faqs');
Route::get('/gallery', [Controller::class, 'gallery'])->name('gallery');
Route::get('/book-now', [Controller::class, 'bookNow'])->name('bookNow');
Route::post('/store/bookings', [Controller::class, 'store'])->name('applicants.store');
