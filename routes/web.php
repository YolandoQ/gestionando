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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PrincipalController@principal')->name('site.principal');
Route::post('/', 'PrincipalController@principal')->name('site.principal');


Route::get('/institutional', 'InstitutionalController@institutional')->name('site.institutional');

Route::get('/contact', 'ContactController@contact')->name('site.contact');
Route::post('/contact', 'ContactController@contact')->name('site.contact');


Route::get('/login', function(){
    return 'Login'; 
})->name('site.login');

Route::prefix('/app')->group(function() {

    Route::get('/customers', function() { 
         return 'Customers';
    })->name('app.customers');

    Route::get('/providers', 'ProvidersController@index')->name('app.providers');
    
    Route::get('/products', function() { 
        return 'Products';
    })->name('app.products');
});



