<?php

use Illuminate\Support\Facades\Auth;
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
Auth::routes();

Route::group(['prefix'=>'admin', 'middleware' =>'auth', 'namespace'=>'dashboard'], function () {
    

    Route::get('/home', 'HomeController@index')->name('admin');
    Route::get('/', 'HomeController@index')->name('admin');

    Route::get('/seo','SeoController@index')->name('seo');
    
    Route::get('/about','AboutController@index')->name('about');

    

    Route::resource('/plans', 'PlanController')->names([
        'index' => 'plans',
        'create' => 'plan.create'
    ]);

    
});
