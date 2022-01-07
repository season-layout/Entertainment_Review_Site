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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/mypage', function () {
//     return view('entame.MyPage');
// });

// Route::get('/toppage', function () {
//     return view('entame.TopPage');
// });

// Route::get('/ranking', function () {
//     return view('entame.ranking');
// });

// Route::get('/register_work', function () {
//     return view('entame.register');
// });

// Route::get('/register_review', function () {
//     return view('entame.review');
// });

Route::get('/toppage', [App\Http\Controllers\EntameController::class, 'toppage'])->name('entame.toppage');
Route::get('/mypage', [App\Http\Controllers\EntameController::class, 'mypage'])->name('entame.mypage');
Route::get('/register_work', [App\Http\Controllers\EntameController::class, 'register'])->name('entame.register');
Route::post('/register_work', [App\Http\Controllers\EntameController::class, 'storeWork'])->name('entame.storeWork');

Route::match(['get', 'post'], '/register_review1', [App\Http\Controllers\ReviewController::class, 'move'])->name('review.move');
// Route::match(['get', 'post'], '/register_review2', [App\Http\Controllers\ReviewController::class, 'store'])->name('review.store');

// Route::post('/register_review1', [App\Http\Controllers\ReviewController::class, 'move'])->name('review.move');
Route::post('/register_review2', [App\Http\Controllers\ReviewController::class, 'store'])->name('review.store');