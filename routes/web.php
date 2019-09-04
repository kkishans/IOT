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

Route::get('/home/add', function () {
    return view('addRoom');
})->name('AddRoom');


Auth::routes();



Route::group(['middleware'=>'auth'],function ()
{

    Route::get('/rooms',[
        'uses' => 'RoomController@index',
        'as'  => 'Rooms'
      ]);
    
      Route::get('/room/delete/{id}', [
        'uses'  => 'RoomController@destroy',
        'as'    => 'Room.delete'
      ]);
    
      Route::get('/room/edit/{id}', [
        'uses'  => 'RoomController@edit',
        'as'    => 'Room.edit'
      ]);
    
      Route::post('/room/update/{id}', [
        'uses'  => 'RoomController@update',
        'as'    => 'Room.update'
      ]);
    
      Route::get('/room/create', [
        'uses'  => 'RoomController@create',
        'as'    => 'Room.create'
      ]);

    Route::get('/store', [
        'uses'  => 'RoomController@store',
        'as'    => 'Room.store'
      ]);
});

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/upload','HomeController@data')->name('data');
