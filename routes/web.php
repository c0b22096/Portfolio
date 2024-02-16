<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;


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

Route::get('/menus/{category}', [ProductController::class, 'index'])->name('menus');

Route::get('/create', [CategoryController::class, 'index'])->name('create');

Route::get('/categories', [CategoryController::class, 'index_2'])->name('categories');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::post('/home', [ProductController::class, 'store'])->name('store');

// Route::group(['middleware' => ['auth']], function () {
// });
