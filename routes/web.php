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

use Illuminate\Routing\RouteGroup;

Route::get('item', 'ItemController@index')->name('index');
// Route::get('/items/create', 'ItemController@create')->name('create');
// Route::post('/items', 'ItemController@store')ç
Route::get('/items/{id}', 'ItemController@show')->name('show')->where('id', '[0-9]+');
Route::get('/items/{id}/edit', 'ItemController@edit')->name('edit')->where('id', '[0-9]+');
Route::patch('/items/{id}', 'ItemController@update')->name('update')->where('id', '[0-9]+');
Route::get('/items/{item}/delete', 'ItemController@delete')->name('delete')->where('item', '[0-9]+'); //追加
Route::delete('/items/{item}', 'ItemController@destroy')->name('destroy')->where('item', '[0-9]+');  //追加

// 管理画面トップ
Route::get('/', 'IndexController@index');

// 開発用メニュー
Route::prefix('develop')->group(function () {
    Route::get('/command', 'DevelopMenuController@command')->name('command');
});

// 仕入メニュー
Route::prefix('puchase')->group(function () {
    Route::get('/', 'PurchaseController@index')->name('purchase');
});
// エディタから編集


Route::prefix('menu')->group(function () {
    // Route::get('/user/{name}', function ($name) {
        //
    // })->where('name', '[A-Za-z]+');

    Route::get('/{param}', 'IndexController@param')->name('param-test')
    ->where('param', '[0-9]+');


    // Route::get('/{param}', 'IndexController@param')->name('param')
    // ->where('param', config('const.ROUTE_GUARD.AtoZ'));
});

// 投稿関連
// Route::get('/', 'ArticleController@index');
Route::get('article-create', 'ArticleController@create')->name('create');
Route::post('article-create', 'ArticleController@store')->name('store');
Route::get('article-confirm', 'ArticleController@confirm')->name('article-confirm');
Route::get('article-complete', 'ArticleController@complete')->name('article-complete');

Route::get('comment-create/{id}', 'CommentController@create')->name('comment');
