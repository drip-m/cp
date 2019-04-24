<?php

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

Route::get('/', 'IndexController@index')->name("home");
Route::get('/about', 'IndexController@about')->name('about'); // 关于我们
Route::get('/contact', 'IndexController@contact')->name('contact'); // 联系我们
// Route::get('/news', 'IndexController@news')->name('news');
Route::get('/product/{id?}', 'IndexController@product')->name('product'); // 产品中心
Route::get('/solution/{id?}', 'IndexController@solution')->name('solution'); // 解决方案
Route::get('/solution_detail/{id}', 'IndexController@solutionDetail')->name('solution_detail'); // 解决方案详情
Route::get('/product_detail/{id}', 'IndexController@productDetail')->name('product_detail'); // 解决方案详情
Route::get('/engineering', 'IndexController@engineering')->name('engineering'); // 工程案例
// Route::get('/rczp', 'IndexController@rczp')->name('rczp');
Route::get('/download/{id?}', 'IndexController@download')->name('download'); // 下载中心
