<?php
Use App\Models\posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


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

Route::get('posts', 'postsController@index');
Route::get('posts/{posts}', 'postsController@show');
Route::post('posts', 'postsController@store');
Route::put('posts/{posts}', 'postsController@update');
Route::delete('posts/{posts}', 'postsController@delete');