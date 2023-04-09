<?php

use App\Http\Controllers\BlogController; 
use App\Http\Controllers\PagesController; 
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

Route::get('/', [PagesController::class, 'homepage'])
    ->name('homepage');

Route::prefix('/blogs')->name('blog.')->group(function(){
    Route::get('/', [BlogController::class, 'index'])
        ->name('index');
    Route::get('/{blog:slug}', [BlogController::class, 'show'])
        ->name('show');
});

Route::view('/contact', 'pages.contact')
    ->name('contact');

Route::post('/contact', [PagesController::class, 'sendEnquiry'])
    ->name('contact');

Route::view('/privacy-policy', 'pages.privacy')
    ->name('privacy');