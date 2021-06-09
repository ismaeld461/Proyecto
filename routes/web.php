<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FolderController;
use App\Http\Controllers\U;
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
Route::get('/folder', function () {
    return view('folder.index');
});



Auth::routes();

Route::resource('folder', FolderController::class)->middleware('auth');

Route::get('/folder', [FolderController::class, 'index'])->name('folder.index');

Route::get('/folder.show', [FolderController::class, 'show'])->name('folder.show');

//Route::get('folder', [FolderController::class, 'store'])->name('folder.store');

Route::get('folder.create', [FolderController::class, 'create'])->name('folder.create');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
