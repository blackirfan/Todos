<?php






Auth::routes();

// Route::get('/imu', 'HomeController@index')->name('home');


Route::get('/new', 'HomeController@new')->name('new');

Route::get('/profile', 'HomeController@index')->name('profile');



Route::get('/hunter', 'HomeController@hunter')->name('hunter');



Route::get('/todos', 'TodosController@index')->name('todos');

Route::get('/home', 'TodosController@home')->name('home');


Route::post('/create/todo', 'TodosController@store'); 

Route::get('/todo/delete/{id}','TodosController@delete')->name('toDO.delete');

Route::get('/todo/update/{id}','TodosController@update')->name('toDO.update');

Route::post('/todo/save/{id}', 'TodosController@save')->name('toDO.save'); 

Route::get('/todos/completed/{id}', 'TodosController@completed')->name('todos.completed');