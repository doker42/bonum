<?php

use App\Http\Controllers\MainController;
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

Route::get('/', [MainController::class, 'index'])->name('main');
Route::get('/categories', [MainController::class, 'categories'])->name('categories');


Route::get('/admin/dashboard', '\App\Http\Controllers\MainController@admins')->name('admins');


Route::group(['prefix' => 'posts'], function (){
    Route::get('/create', '\App\Http\Controllers\PostController@create')->name('posts_create');
    Route::post('/', '\App\Http\Controllers\PostController@store')->name('posts_store');
    Route::get('/edit/form/{id}', '\App\Http\Controllers\PostController@editForm')->name('edit_form');
    Route::post('/update', '\App\Http\Controllers\PostController@update')->name('posts_update');
    Route::post('/delete', '\App\Http\Controllers\PostController@destroy')->name('posts_delete');


});




Route::get('/categories/{category}/posts', '\App\Http\Controllers\PostController@getCategoryPosts')->name('categories.posts');








require __DIR__.'/auth.php';
