<?php
Use App\Models\posts;
Use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\RegisterController;



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

Route::group(['middleware' => ['cors', 'json.response']], function () {
Route::get('/posts', 'App\Http\Controllers\postsController@index');

Route::group(['middleware' => 'auth:api'], function ()  {
Route::get('/posts/{posts}', 'App\Http\Controllers\postsController@show');
Route::post('/posts', 'App\Http\Controllers\postsController@store');
Route::put('/posts/{posts}', 'App\Http\Controllers\postsController@update');
Route::delete('/posts/{posts}', 'App\Http\Controllers\postsController@delete');
Route::post('/logout', 'App\Http\Controllers\AuthController@logout');

});

Route::post('/register', 'App\Http\Controllers\AuthController@register');
Route::post('/login', 'App\Http\Controllers\AuthController@login');


});
