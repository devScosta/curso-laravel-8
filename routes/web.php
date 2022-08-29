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



Route::get('/login', function() {
    return 'login';
})->name('login');

/*Route::middleware([])->group(function() {
    
    Route::prefix('admin')->group(function() {

        Route::namespace('App\Http\Controllers\Admin')->group(function () {
            Route::name('admin.')->group(function() {
                Route::get('/dashboard', 'TesteController@teste')->name('dashboard');
            
                Route::get('/financeiro', 'TesteController@teste')->name('finaceiro');
                
                Route::get('/produtos', 'TesteController@teste')->name('products');
    
                Route::get('/', function () {
                    return redirect()->route('dashboard');
                })->name('home');
            });
        }); 
    });
});*/

Route::group([
    'middleware' => [],
    'prefix'=> 'admin',
    'namespace'=> 'App\Http\Controllers\Admin',
    'name'=> 'admin'
], function() {
        Route::get('/dashboard', 'TesteController@teste')->name('dashboard');
                
        Route::get('/financeiro', 'TesteController@teste')->name('financeiro');
                    
        Route::get('/produtos', 'TesteController@teste')->name('products');
        
        Route::get('/', function () {
            return redirect()->route('dashboard');
        })->name('home');
});

Route::get('/contacto', function() {
    return 'HELLO WORD!';
})->name('contatos.empresa');

Route::get('redirect4', function() {
    return redirect()->route('contatos.empresa');
});

Route::get('/name-url', function() {
    return 'Hay, HOY, HOY';
})->name('url.name');

Route::view('/view', 'welcome');


Route::redirect('/redirect1', '/redirect2');

//Route::get('redirect1', function() {
//    return redirect('/redirect2');
//});

Route::get('redirect2', function() {
    return 'Redirect 02';
});

Route::get('redirect3', function() {
        return redirect()->route('url.name');
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
