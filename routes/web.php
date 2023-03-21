<?php

use App\Http\Controllers\WebsiteControler;
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
Route::get('/crud','CrudController@index')->name('crud-index');
Route::get('/edit/{id}','CrudController@edit');
Route::post('/crud-index','CrudController@store')->name('crud-insert');
Route::post('/crud-update','CrudController@update')->name('crud-update');

Route::get('/', 'WebsiteControler@home');
Route::get('/contact', 'WebsiteControler@contact')->name('website.contact');

Route::post('/contact-submit', 'WebsiteControler@contact_submit')->name('website.contact_submit');


Auth::routes();
Route::get('/profile', 'WebsiteControler@profile')->middleware('auth');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//admin
Route::group( ['prefix'=>'admin','middleware'=>['auth'] ,'namespace'=>'Admin' ],function(){
    Route::get('/dashboard', 'DashboardControler@index')->name('dashboard.home');



//common
Route::group( ['prefix'=>'common' ],function(){
    Route::get('/all','DashboardControler@demo_all')->name('dashboard.common.all');
    Route::get('/show','DashboardControler@demo_show')->name('dashboard.common.show');
    Route::get('/create','DashboardControler@demo_create')->name('dashboard.common.create');
});

//users
Route::group( ['prefix'=>'user' ],function(){
    Route::get('/all','UserController@all')->name('dashboard.user.all');
    Route::get('/show','UserController@show')->name('dashboard.user.show');
    Route::get('/create','UserController@create')->name('dashboard.user.create');
});

//contact
Route::group( ['prefix'=>'contact' ],function(){
    Route::get('/index','ContactController@index')->name('dashboard.contact.index');
    Route::get('/show','ContactController@show')->name('dashboard.contact.show');
    Route::get('/create','ContactController@create')->name('dashboard.contact.create');
});
//crud
Route::group( ['prefix'=>'crud' ],function(){
    Route::get('/create','SharifController@create')->name('dashboard.crud.create');
    Route::get('/index','SharifController@index')->name('dashboard.crud.index');
    Route::post('/store','SharifController@store')->name('dashboard.crud.store');
    // Route::get('/create','SharifController@create')->name('dashboard.crud.create');
});
//crud book
Route::group( ['prefix'=>'crud_book' ],function(){
    Route::get('/create','CrudBookController@create')->name('dashboard.crud_book.create');
    Route::get('/index','CrudBookController@index')->name('dashboard.crud_book.index');
    Route::post('/store','CrudBookController@store')->name('dashboard.crud_book.store');
    Route::post('/update','CrudBookController@update')->name('dashboard.crud_book.update');



});




});
