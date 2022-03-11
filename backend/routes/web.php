<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');

//add関数(コメントをデータベースに保存する関数)登録
Route::post('/add', [HomeController::class,'add'])->name('add');
//Route::post('/add', 'HomeController@add')->name('add');

//json
Route::get('/result/ajax', [HomeController::class,'getData'])->name('getData');
//Route::get('/result/ajax', 'HomeController@getData');

