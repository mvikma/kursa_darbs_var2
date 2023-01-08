<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ZinaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/blog', 'PagesController@blog')->name('pages.blog');
Route::get('/shop', 'PagesController@shop')->name('pages.shop');
Route::get('/team', 'PagesController@team');
Route::get('/juice', 'PagesController@juice');
Route::get('/candy', 'PagesController@candy');
Route::get('/berry', 'PagesController@berry');
Route::get('/admin', 'PagesController@admin')->name('pages.admin');
Route::get('/login', 'PagesController@login');
Route::get('/product_form', 'PagesController@product_form');
Route::get('/blog_form', 'PagesController@blog_form');
Route::get('/admin_form', 'PagesController@admin_form');
Route::get('/admin_edit', 'PagesController@admin_edit');
Route::get('/blog_edit', 'PagesController@blog_edit');
Route::get('/product_edit', 'PagesController@product_edit');

Route::get('/shop', 'ProductController@shop');
Route::get("details/{id}",'ProductController@details');
Route::get("delete/{id}",'ProductController@delete');
Route::get("product_edit/{id}",'ProductController@edit');

Route::get('/blog', 'BlogController@blog');
Route::get("delete/{Bloga_ID}",'BlogController@delete');
Route::get("blog_edit/{Bloga_ID}",'BlogController@edit');

Route::get('/admin', 'UserController@admin');
Route::get("delete/admin/{admin_id}",'UserController@delete');
Route::get("admin_edit/{admin_id}",'UserController@edit');


Route::post('blog_form', 'BlogController@store');
Route::post('product_form', 'ProductController@store');
Route::post('admin_form', 'UserController@store');
Route::post('footer', 'ZinaController@store');
Route::post('blog_update', 'BlogController@update');
Route::post('product_update', 'ProductController@update');
Route::post('admin_update', 'UserController@update');
Auth::routes();
//Route::post('login', 'AuthController@customLogin');
//Route::get('/home', 'HomeController@index');
//Route::get('signout', 'AuthController@signOut');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
