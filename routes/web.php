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
    //form2
    Route::get('get-dvbh', 'id_2_Controller@getDVBH')->name('getDVBH');
    Route::get('get-mst', 'id_2_Controller@getMST')->name('getMST');
    Route::get('get-diachi', 'id_2_Controller@getDC')->name('getDC');
    Route::get('get-dienthoai', 'id_2_Controller@getDT')->name('getDT');
    Route::get('get-stk', 'id_2_Controller@getSTK')->name('getSTK');
    Route::get('get-nh', 'id_2_Controller@getNH')->name('getNH');
    //form3
    Route::get('get-buyer', 'id_2_Controller@getBuyer')->name('getBuyer');
    Route::get('get-company', 'id_2_Controller@getCPN')->name('getCPN');
    Route::get('get-tax', 'id_2_Controller@getTax')->name('getTax');
    Route::get('get-address', 'id_2_Controller@getADD')->name('getADD');
    Route::get('get-paymethd', 'id_2_Controller@getPM')->name('getPM');
    Route::get('get-accc-no', 'id_2_Controller@getAccNo')->name('getAccNo');
    Route::get('get-tenhang', 'id_2_Controller@getTH')->name('getTH');
    Route::get('pdf','id_2_Controller@exportPDF')->name('exportPDF');
});
