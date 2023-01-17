<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\FrontendController;
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



// Route::group(['prefix' => 'admin'], function () {
//     // Route::resource('blogs', BlogController::class);
// });

Route::get('/', [FrontendController::class, 'index']);

Route::get('/single-blog/{blog:slug}', [FrontendController::class, 'single_blog'])->name('singleblog');

Route::post('comment-store', [FrontendController::class, 'commentStore'])->name('blog.comment');
