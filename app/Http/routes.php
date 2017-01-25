<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

use App\Task;
use Illuminate\Http\Request;


Route::group(['middleware' => ['web']], function () {
    Route::get('/', function () {
      return view('welcome');
    });
    Route::auth();

    Route::get('/home', 'HomeController@index');

//Produto
Route::get('/produto',['as'=>'produto.index','uses'=>'ProdutoController@index']);
Route::get('/produto/create',['as'=>'produto.create','uses'=>'ProdutoController@create']);
Route::get('/produto/{id}',['as'=>'produto.show','uses'=>'ProdutoController@show']);
Route::post('/produto',['as'=>'produto.store', 'uses'=>'ProdutoController@store']);
Route::put('/produto/{id}',['as'=>'produto.update','uses'=>'ProdutoController@update']);
Route::get('/produto/{id}/edit',['as'=> 'produto.edit' ,'uses'=>'ProdutoController@edit']);
Route::delete('/produto/{id}',['as'=> 'produto.destroy', 'uses'=>'ProdutoController@destroy']);
});
