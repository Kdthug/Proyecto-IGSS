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

Route::get('home', function () {
    return view('home');
})->middleware('auth');

Route::get('tags/{name}', [
    'uses' => 'filesController@searchTag',
    'as' => 'file.search.tag'
])->middleware('role:admin');

Route::get('editor', 'FilesController@indexeditor')->name('editor.index')
->middleware('role:editor');

Route::get('editorcreate', 'FilesController@createditor')->name('editor.create')
->middleware('role:editor');

Route::delete('editordestroy', 'FilesController@editordestroy')->name('editor.destroy')->middleware('role:editor');
Route::post('editorstore', 'FilesController@editorstore')->name('editor.store')->middleware('role:editor');
Route::get('editordownload', 'FilesController@editordownload')->name('editor.download')->middleware('role:editor');

Route::get('cliente', 'FilesController@indexclient')->name('client.index')
->middleware('role:client');

Route::get('clientdownload', 'FilesController@clientdownload')->name('client.download')->middleware('role:client');



Route::get('empresa', function () {
    return view('empresa');
});

Route::get('filosofia', function () {
    return view('filosofia');
});

Route::get('servicios', function () {
    return view('servicios');
});

Route::get('clientes', function () {
    return view('clientes');
});

Route::prefix('admin')->group(function(){

  Route::resource('users', 'UsersController')->names(['create' => 'admin.users.create', 'index' => 'admin.users.index', 'store' => 'admin.users.store', 'show' => 'admin.users.show', 'update' => 'admin.users.update', 'destroy' => 'admin.users.destroy', 'edit' => 'admin.users.edit'])->middleware('role:admin');
  Route::get('users/{id}/destroy', [
    'uses' => 'UsersController@destroy',
    'as' => 'admin.users.destroy'
  ])->middleware('role:admin');
  Route::resource('groups', 'GroupsController')->names(['create' => 'admin.groups.create', 'index' => 'admin.groups.index', 'store' => 'admin.groups.store', 'show' => 'admin.groups.show', 'update' => 'admin.groups.update', 'destroy' => 'admin.groups.destroy', 'edit' => 'admin.groups.edit'])->middleware('role:admin');
  Route::get('groups/{id}/destroy', [
    'uses' => 'GroupsController@destroy',
    'as' => 'admin.groups.destroy'
  ])->middleware('role:admin');
  Route::resource('tags', 'TagsController')->names(['create' => 'admin.tags.create', 'index' => 'admin.tags.index', 'store' => 'admin.tags.store', 'show' => 'admin.tags.show', 'update' => 'admin.tags.update', 'destroy' => 'admin.tags.destroy', 'edit' => 'admin.tags.edit'])->middleware('role:admin');
  Route::get('tags/{id}/destroy', [
    'uses' => 'TagsController@destroy',
    'as' => 'admin.tags.destroy'
  ])->middleware('role:admin');
  Route::resource('articles', 'Articlescontroller')->names(['create' => 'admin.articles.create', 'index' => 'admin.articles.index', 'store' => 'admin.articles.store', 'show' => 'admin.articles.show', 'update' => 'admin.articles.update', 'destroy' => 'admin.articles.destroy', 'edit' => 'admin.articles.edit'])->middleware('role:admin');
  Route::get('articles/{id}/destroy', [
    'uses' => 'ArticlesController@destroy',
    'as' => 'admin.articles.destroy'
    ])->middleware('role:admin');

  Route::get('files', [
    'uses' => 'DownloadController@downfunc',
    'as' => 'admin.files.down'

  ])->middleware('role:admin,client');
  Route::get('/', 'FilesController@index')->name('admin.files.index')->middleware('role:admin');

  Route::post('/files', 'FilesController@store')->name('admin.files.store');

  Route::delete('/files/{file}', 'FilesController@destroy')->name('admin.files.destroy')->middleware('role:admin');

  Route::get('/files/{file}/download', 'FilesController@download')->name('admin.files.download');

  Route::get('/files/create', 'FilesController@create')->name('admin.files.create')->middleware('role:admin');
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
