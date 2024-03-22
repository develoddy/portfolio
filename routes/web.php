<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/service', function () {
    return view('web.service-standard');
})->name('service');

Route::get('/contact', function () {
    return view('web.contact');
})->name('contact');

// About
Route::group(['prefix' => 'about'], function () {
    /*Route::get('/', function () {
        return view('web.about-creative');
    })->name('about');*/
    Route::get('/', [AboutController::class, 'index'])->name('about');
});

// Group Portfolio
Route::group(['prefix' => 'portfolio'], function () {
    Route::get('/', [PortfolioController::class, 'index'])->name('portfolio-all');
    Route::get('/{id}/{name}', [PortfolioController::class, 'show'])->name('portfolio-detail');
});

// Group Blog
Route::group(['prefix' => 'blog'], function () {
    Route::get('/', [BlogController::class, 'index'])->name('blog');
    Route::get('/{id}/{name}', [BlogController::class, 'show'])->name('blog-detail');
});









 
/* Rutas por defecto de laravel */
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
