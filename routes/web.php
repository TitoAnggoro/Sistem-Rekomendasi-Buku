<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/categories', [App\Http\Controllers\CategoryController::class, 'index'])->name('categories');
Route::get('/categories/{id}', [App\Http\Controllers\CategoryController::class, 'detail'])->name('categories-detail');

Route::get('/books', [App\Http\Controllers\BookController::class, 'index'])->name('book');
Route::get('/about-us', [App\Http\Controllers\AboutUsController::class, 'index'])->name('aboutus');
Route::get('/contact-us', [App\Http\Controllers\ContactUsController::class, 'index'])->name('contactus');
Route::get('/details/{id}', [App\Http\Controllers\DetailController::class, 'index'])->name('detail');


Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');

Route::get('/dashboard/subyek', [App\Http\Controllers\Admin\DashboardSubyekController::class, 'index'])->name('dashboard-subyek');
Route::get('/dashboard/subyek/create', [App\Http\Controllers\Admin\DashboardSubyekController::class, 'create'])->name('dashboard-subyek-create');
Route::get('/dashboard/subyek/{id}', [App\Http\Controllers\Admin\DashboardSubyekController::class, 'details'])->name('dashboard-subyek-details');

Route::get('/dashboard/books', [App\Http\Controllers\Admin\DashboardBooksController::class, 'index'])->name('dashboard-books');
Route::get('/dashboard/books/create', [App\Http\Controllers\Admin\DashboardBooksController::class, 'create'])->name('dashboard-books-create');
Route::get('/dashboard/books/{id}', [App\Http\Controllers\Admin\DashboardBooksController::class, 'details'])->name('dashboard-books-details');

Route::get('/dashboard/covers', [App\Http\Controllers\Admin\DashboardcoversController::class, 'index'])->name('dashboard-covers');
Route::get('/dashboard/covers/create', [App\Http\Controllers\Admin\DashboardcoversController::class, 'create'])->name('dashboard-covers-create');
Route::get('/dashboard/covers/{id}', [App\Http\Controllers\Admin\DashboardcoversController::class, 'details'])->name('dashboard-covers-details');

// Route::get('/dashboard/sirkulasi', [App\Http\Controllers\Admin\DashboardCirculationsController::class, 'index'])->name('dashboard-sirkulasi');
// Route::get('/dashboard/sirkulasi/create', [App\Http\Controllers\Admin\DashboardCirculationsController::class, 'create'])->name('dashboard-sirkulasi-create');

Route::get('/dashboard/peminjaman', [App\Http\Controllers\Admin\PeminjamanController::class, 'index'])->name('dashboard-peminjaman');
Route::get('/dashboard/peminjaman', [App\Http\Controllers\Admin\PeminjamanController::class, 'create'])->name('dashboard-peminjaman-create');

Route::get('/dashboard/peminjaman/terima/{id}', [App\Http\Controllers\Admin\PeminjamanController::class, 'terima'])->name('terima');
Route::get('/dashboard/peminjaman/kurangistok/{id}', [App\Http\Controllers\Admin\PeminjamanController::class, 'kurangistok'])->name('kurangistok');

Route::prefix('admin')
    ->namespace('Admin')
    // ->middleware(['auth','admin'])
    ->group(function(){
        Route::get('/',[App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin-dashboard');
        Route::resource('subject','\App\Http\Controllers\Admin\SubjectController');
        Route::resource('books','\App\Http\Controllers\Admin\BooksController');
        Route::resource('covers','\App\Http\Controllers\Admin\CoversController');
        Route::resource('peminjaman','\App\Http\Controllers\Admin\PeminjamanController');
        Route::resource('pengembalian','\App\Http\Controllers\Admin\PengembalianController');
        // Route::resource('sirkulasi','\App\Http\Controllers\Admin\CirculationsController');
    });