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

Route::prefix('admin')->group(function(){

  Route::resource('users', 'UsersController')->names(['create' => 'admin.users.create', 'index' => 'admin.users.index', 'store' => 'admin.users.store', 'show' => 'admin.users.show', 'update' => 'admin.users.update', 'destroy' => 'admin.users.destroy', 'edit' => 'admin.users.edit']);
  Route::get('users/{id}/destroy', [
    'uses' => 'UsersController@destroy',
    'as' => 'admin.users.destroy'
  ]);
  Route::resource('groups', 'GroupsController')->names(['create' => 'admin.groups.create', 'index' => 'admin.groups.index', 'store' => 'admin.groups.store', 'show' => 'admin.groups.show', 'update' => 'admin.groups.update', 'destroy' => 'admin.groups.destroy', 'edit' => 'admin.groups.edit']);
  Route::get('groups/{id}/destroy', [
    'uses' => 'GroupsController@destroy',
    'as' => 'admin.groups.destroy'
  ]);
  Route::resource('tags', 'TagsController')->names(['create' => 'admin.tags.create', 'index' => 'admin.tags.index', 'store' => 'admin.tags.store', 'show' => 'admin.tags.show', 'update' => 'admin.tags.update', 'destroy' => 'admin.tags.destroy', 'edit' => 'admin.tags.edit']);
  Route::get('tags/{id}/destroy', [
    'uses' => 'TagsController@destroy',
    'as' => 'admin.tags.destroy'
  ]);
  Route::resource('articles', 'Articlescontroller')->names(['create' => 'admin.articles.create', 'index' => 'admin.articles.index', 'store' => 'admin.articles.store', 'show' => 'admin.articles.show', 'update' => 'admin.articles.update', 'destroy' => 'admin.articles.destroy', 'edit' => 'admin.articles.edit']);;
  Route::get('articles/{id}/destroy', [
    'uses' => 'ArticlesController@destroy',
    'as' => 'admin.articles.destroy'
    ]);

  Route::get('files', [
    'uses' => 'DownloadController@downfunc',
    'as' => 'admin.files.down'

  ]);
  Route::get('/', 'FilesController@index')->name('admin.files.index');

  Route::post('/files', 'FilesController@store')->name('admin.files.store');

  Route::delete('/files/{file}', 'FilesController@destroy')->name('admin.files.destroy');

  Route::get('/files/{file}/download', 'FilesController@download')->name('admin.files.download');

  Route::get('/files/create', 'FilesController@create')->name('admin.files.create');
});

Auth::routes();

//Route::get('admin/auth/login', [
//  'uses' => 'Auth\LoginController@getLogin',
//  'as' => 'admin.auth.login'
//]);
//Route::post('admin/auth/login', [
//  'uses' => 'LoginController',
//  'as' => 'admin.auth.login'
//]);
//Route::post('admin/auth/logout', [
//  'uses' => 'Auth\LoginController@getLogout');
//  'as' => 'admin.auth.logout'
//]);
