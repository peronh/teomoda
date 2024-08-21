<?php

use App\Http\Controllers\ContactController;
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


//Route::group(['prefix' => '/{locale?}', 'middleware' => 'setLocale'], function ($locale) {
Route::prefix('{locale?}')
    ->middleware('setLocale')
    ->group(function() {

    Route::get('/', function () {
        return view('home');
    });

    Route::get('/services', function () {
        return view('services');
    });

    Route::get('/personal-color-consultation', function () {
        return view('personalColorConsultation');
    });
    Route::get('/personal-style-consultation', function () {
        return view('personalStyleConsultation');
    });
    Route::get('/wardrobe-audit', function () {
        return view('wardrobeAudit');
    });
    Route::get('/personal-shopping', function () {
        return view('personalShopping');
    });
    Route::get('/personalized-package', function () {
        return view('personalizedPackage');
    });
    Route::get('/about', function () {
        return view('about');
    });

    Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
    Route::post('/contact', [ContactController::class, 'contactPost'])->name('contactPost');

    Route::get('/gellery-and-style-tips', function () {
        return view('blog');
    });

    Route::get('/testimonials', function () {
        return view('testimonials');
    });

});




