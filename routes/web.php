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

Route::get('/', 'PrincipalController@principal');

Route::get('/institutional', 'InstitutionalController@institutional');

Route::get('/contact', 'ContactController@contact' );

Route::get('/login', function(){ return 'Login'; });

Route::get('/customers', function(){ return 'Customers'; });

Route::get('/providers', function(){ return 'Providers'; });

Route::get('/products', function(){ return 'Products'; });

