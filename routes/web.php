<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PortfolioController;
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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/service', function () {
    return view('web.service-standard');
})->name('service');

Route::get('/contact', function () {
    return view('web.contact');
})->name('contact');

Route::group(['prefix' => 'about'], function () {
    Route::get('/', function () {
        return view('web.about-creative');
    })->name('about');
});

// Group Portfolio
Route::group(['prefix' => 'portfolio'], function () {
    Route::get('/', function () {
        return view('web.portfolio');
    })->name('portfolio');
    
    //Route::get('/detail/{portfolio:slug}', [PortfolioController::class, 'show'])->name('portfolio-detail')
    Route::get('/detail/01', function () { 
        return view('web.portfolio.01.design-with-mockup'); 
    })->name('design-with-mockup');

    Route::get('/detail/02', function () { 
        return view('web.portfolio.02.creative-idea'); 
    })->name('creative-idea');
});

// Group Blog
Route::group(['prefix' => 'blog'], function () {
    Route::get('/', function () {
        return view('web.blog-list-sidebar');
    })->name('blog');

    Route::get('/detail/2024-03-27/eddy-lujan-software-developer', function () { 
        return view('web.blog.2024-03-27.eddy-lujan-software-developer'); 
    })->name('eddy-lujan-software-developer');
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
