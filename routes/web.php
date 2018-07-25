<?php

Route::get('/', 'PageController@index')->name('home.index');

Route::view('/articles/categories', 'categories.index');
Route::get('/articles', 'ArticleController@index')->name('articles.index');
Route::get('/articles/{slug}', 'ArticleController@show')->name('articles.show');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

