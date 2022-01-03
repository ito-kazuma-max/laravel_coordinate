<?php


Route::get('/', function () {
    return view('top');
})->name('top');

Auth::routes();

Route::get('/mypage', 'MypageController@index')
    ->name('mypage.index');

Route::get('/items', 'ItemController@index')
    ->name('items.index');

Route::get('/items/create', 'ItemController@create')
    ->name('items.create');

Route::post('/items', 'ItemController@store')
    ->name('items.store');

Route::get('/items/{item}/edit', 'ItemController@edit')
    ->name('items.edit');

Route::patch('/items/{item}', 'ItemController@update')
    ->name('items.update');

Route::get('/items/{item}/edit_image', 'ItemController@edit_image')
    ->name('items.edit_image');

Route::patch('/items/{item}', 'ItemController@update_image')
    ->name('items.update_image');

Route::delete('/items/{item}', 'ItemController@destroy')
        ->name('items.destroy');

Route::get('/users/{user}/coordinates', 'CoordinateController@index')
    ->name('coordinates.index');

Route::get('/users/{user}/coordinates/create', 'CoordinateController@create')
    ->name('coordinates.create');

Route::get('/coordinates/{coordinate}', 'CoordinateController@show')
    ->name('coordinates.show');

Route::post('/users/{user}/coordinates/store', 'CoordinateController@store')
    ->name('coordinates.store');

Route::delete('/users/{user}/coordinates/{coordinate}', 'CoordinateController@destroy')
    ->name('coordinates.destroy');

Route::get('/users/{user}/user_page', 'UserController@user_page')
    ->name('users.user_page');



