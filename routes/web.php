<?php


Route::get('/', 'PageController@index');
Route::get('/allusers', 'PageController@allusers')
->name('users.allusers');;


Route::get('/pedidos', 'PageController@index')
    ->name('users.index');

Route::get('/pedidos/{user}', 'PageController@show')
    ->where('user', '[0-9]+')
    ->name('users.show');

Route::get('/pedidos/nuevo', 'PageController@create')->name('users.create');

Route::post('/pedidos', 'PageController@store');

Route::get('/pedidos/{user}/editar', 'PageController@edit')->name('users.edit');

Route::put('/pedidos/{user}', 'PageController@update');

Route::delete('/pedidos/{user}', 'PageController@destroy')->name('users.destroy');


