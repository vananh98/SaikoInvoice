<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Id_1_Controller;
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

Route::get('/', 'AuthController@index')->name('login.index');
Route::post('/', 'AuthController@login')->name('login.login');

Route::prefix('/')->middleware('auth')->group(function () {
    Route::get('/id1/view-create', 'Id_1_Controller@viewCreate')->name('viewCreate');
    Route::get('/id1/view-list', 'Id_1_Controller@viewList')->name('viewCreate');
    Route::resource('/id1', 'Id_1_Controller');
    Route::resource('id2', 'id_2_Controller');
});
