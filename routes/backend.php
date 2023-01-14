<?php

use App\Http\Controllers\BlogController;
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


// Route::get('admin/blog', [BlogController::class, 'index'])->name('admin.blog.index');



Route::group(['prefix' => 'admin',  'middleware' => 'auth'], function () {
    Route::resource('blogs', BlogController::class);
});
