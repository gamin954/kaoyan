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

Route::get('/', function () {
    return view('welcome');
});


//Route::prefix('admin/query')->name('query.')->group(function (){
//    Route::get('user', 'Admin\QueryController@user')->name('user');
//});


/****************************tools*********************/

Route::any('jsonToSql', 'Tools@jsonToSql');

// 研招网
Route::get('apply/cjcx', 'Index\IndexController@login');
///apply/cjcx/cjcx.do
Route::any('apply/cjcx/cjcx.do', 'Index\IndexController@score');
Route::any('apply/cjcx/error','Index\IndexController@errors');

Route::get('/apply/code/cjcxss.do', 'Index\IndexController@getProvince');
Route::get('/apply/code/cjcxdw.do', 'Index\IndexController@getSchool');


// 同济大学
Route::any('tjdx','Index\IndexController@tjdx');
Route::any('login_xscx.jsp','Index\IndexController@tjlogin');
Route::any('ssxscx.do','Index\IndexController@tjscore');


