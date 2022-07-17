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

// Route::get('set-cache1', [App\Http\Controllers\CacheController::class, 'index']);
// Route::get('get-cache1', [App\Http\Controllers\CacheController::class, 'show']);
// Route::get('log-demo', [App\Http\Controllers\LogController::class, 'index'])->name('log');
// Route::get('language-demo', [App\Http\Controllers\LangController::class, 'index'])->name('language');
// Route::get('user/create', [App\Http\Controllers\UserController::class, 'create'])->name('user.create');
// Route::post('user/store', [App\Http\Controllers\UserController::class, 'store'])->name('user.store');

// Route::match(['post','get'], 'upload',[App\Http\Controllers\UploadController::class, 'upload'])->name('upload');

// Auth::routes(['verify' => true]);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/exam', function() {
//     return 'List Exam';
// })->middleware('verified')->name('exam');
