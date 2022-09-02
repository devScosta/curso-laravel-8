<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

use function Ramsey\Uuid\v1;

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

Route::resource('products', 'App\Http\Controllers\ProductController');

/*
Route::delete('products/{id}', 'App\Http\Controllers\ProductController@destroy')->name('products.destroy');

Route::put('products/{id}', 'App\Http\Controllers\ProductController@update')->name('products.update');

Route::get('/products/{id}/edit', 'App\Http\Controllers\ProductController@edit')->name('products.edit');

Route::get('/products/create', 'App\Http\Controllers\ProductController@create')->name('products.create') ;

Route::get('/products/{id}', 'App\Http\Controllers\ProductController@show')->name('products.show');

Route::get('/products', 'App\Http\Controllers\ProductController@index')->name('products.index');

Route::post('/products', 'App\Http\Controllers\ProductController@strore')->name('products.store');
*/

Route::get('/login', function() {
    return 'Login';
})->name('login');