<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloLaravelController;
use App\Http\Controllers\BandController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('hello/{nome}', function ($nome){
    return 'hello laravel from your friend '. $nome." bye";
} );

Route::post('hello-post', 'App\Http\Controllers\HelloLaravelController@hello');

Route::get('bands', 'App\Http\Controllers\BandController@getall');
Route::get('bands/{id}', 'App\Http\Controllers\BandController@getById');
Route::get('bands/genre/{genre}','App\Http\Controllers\BandController@getByGenre');


