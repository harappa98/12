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

Route::group(['prefix' => 'admin'], function() {
    Route::get('news/create', 'Admin\NewsController@add')->middleware("auth");
});

/* 3. 「http://XXXXXX.jp/XXX というアクセスが来たときに、
    AAAControllerのbbbというAction に渡すRoutingの設定」を書いてみてください。*/
    
    Route::get('XXX','Admin\AAAController@bbb');
    
    
/* 4. 【2.応用】【応用】 前章でAdmin/ProfileControllerを作成し、add Action, edit Actionを追加しました。
    web.phpを編集して、admin/profile/create にアクセスしたら ProfileController の add Action に、
    admin/profile/edit にアクセスしたら ProfileController の edit Action に
    割り当てるように設定してください。*/
    
    //【応用】現在はログインしてない状態で /admin/profile/edit にアクセスしたら ProfileController の edit Action に割り当てるように設定されています。 こちらをログインしていない状態で /admin/profile/edit にアクセスした場合にログイン画面にリダイレクトされるように設定しましょう

    
    Route::get('admin/profile/create','Admin\ProfileController@add')->middleware("auth");

    Route::get('admin/profile/edit','Admin\ProfileController@edit')->middleware("auth");
    
    
    
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
