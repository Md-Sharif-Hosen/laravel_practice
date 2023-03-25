<?php

use App\Http\Controllers\Admin\FruitsController;
use App\Http\Controllers\Admin\ShopController;
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
    Route::get('/edit/{id}','SharifController@edit')->name('dashboard.crud.edit');
    Route::post('/update','SharifController@update')->name('dashboard.crud.update');
});
//crud book
Route::group( ['prefix'=>'crud_book' ],function(){
    Route::get('/create','CrudBookController@create')->name('dashboard.crud_book.create');
    Route::get('/index','CrudBookController@index')->name('dashboard.crud_book.index');
    Route::post('/store','CrudBookController@store')->name('dashboard.crud_book.store');
    Route::post('/update','CrudBookController@update')->name('dashboard.crud_book.update');



});
Route::group(['prefix' => 'shop',], function () {

    Route::get('/index', [ShopController::class, 'index'])->name('dashboard.shop.index');
    Route::get('/create', [ShopController::class, 'create'])->name('dashboard.shop.create');
    Route::post('/store', [ShopController::class, 'store'])->name('dashboard.shop.store');
    Route::get('/edit/{id}', [ShopController::class, 'edit'])->name('dashboard.shop.edit');
    Route::post('/update/{id}', [ShopController::class, 'update'])->name('dashboard.shop.update');
    Route::get('/show/{id}', [ShopController::class, 'show'])->name('dashboard.shop.show');
    Route::get('/destroy/{id}', [ShopController::class, 'destroy'])->name('dashboard.shop.destroy');
    Route::get('/details/{id}', [ShopController::class, 'details'])->name('dashboard.shop.details');
});
Route::group(['prefix' => 'fruits',], function () {

    Route::get('/index', [FruitsController::class, 'index'])->name('dashboard.fruite.index');
    Route::get('/create', [FruitsController::class, 'create'])->name('dashboard.fruite.create');
    Route::post('/store', [FruitsController::class, 'store'])->name('dashboard.fruite.store');
    Route::get('/edit/{id}', [FruitsController::class, 'edit'])->name('dashboard.fruite.edit');
    Route::post('/update/{id}', [FruitsController::class, 'update'])->name('dashboard.fruite.update');
    Route::get('/show/{id}', [FruitsController::class, 'show'])->name('dashboard.fruite.show');
    Route::get('/destroy/{id}', [FruitsController::class, 'destroy'])->name('dashboard.fruite.destroy');
    Route::get('/details/{id}', [FruitsController::class, 'details'])->name('dashboard.fruite.details');
});
Route::group( ['prefix'=>'Student',],function(){
    Route::get('/create','StudentController@create')->name('dashboard.student.create');
    Route::post('/store','StudentController@store')->name('dashboard.student.store');
    Route::get('/index','StudentController@index')->name('dashboard.student.index');
    Route::get('/edit/{id}','StudentController@edit')->name('dashboard.student.edit');
    Route::post('/update/{id}','StudentController@update')->name('dashboard.student.update');
    // Route::get('/show/{id}','StudentController@show')->name('dashboard.student.update');
    Route::get('/destory/{id}','StudentController@destroy')->name('dashboard.student.destroy');
    Route::get('/details/{id}','StudentController@details')->name('dashboard.student.details');

});




});
