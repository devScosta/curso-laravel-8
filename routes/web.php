<?php

use Illuminate\Support\Facades\Route;

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
Route::view('/view', 'welcome');



Route::redirect('/redirect1', '/redirect2');

//Route::get('redirect1', function() {
//    return redirect('/redirect2');
//});

Route::get('redirect2', function() {
    return 'Redirect 02';
});

Route::get('/produtos/{idProduct?}', function($idProduct = '') {
    return "PRODUTO(S) {$idProduct}";
});

Route::get('/categorias/{flag}/posts', function($posts) {
    return "Posts por categorias: {$posts}";
});

Route::get('/categorias/{flag}', function($flag) {
    return "Produtos por categoria: {$flag}";
});

Route::match(['PUT','post'], '/march', function() {
    return 'March';
});

Route::any('/any', function() {
    return 'Any';
});

Route::post('/register', function() {
    return '';
});

Route::get('/empresa', function() {
    return view('site.contacto');
});

Route::get('/contato', function() {
    return 'CONTATOS';
});

Route::get('/', function () {
    return view('welcome');
});
