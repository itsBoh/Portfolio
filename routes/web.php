<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/resume', function () {
    return view('resume');
});
Route::get('index', function () {
    return view('index');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('portfolio', function () {
    return view('portfolio');
});
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('portfolio-details-app1', function () {
    return view('portfolio-details-app1');
});

Route::get('portfolio-details-app2', function () {
    return view('portfolio-details-app2');
});

Route::get('portfolio-details-des1', function () {
    return view('portfolio-details-des1');
});

Route::get('portfolio-details-web1', function () {
    return view('portfolio-details-web1');
});

Route::get('portfolio-details-web2', function () {
    return view('portfolio-details-web2');
});