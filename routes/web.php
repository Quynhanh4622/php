<?php

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


//phương thức + đường dẫn + callback function
Route::get('/user/register', [\App\Http\Controllers\HelloController::class,'register']);
Route::post('/user/register', [\App\Http\Controllers\HelloController::class,'processRegister']);

Route::get('/data-handle/{id}/path',[\App\Http\Controllers\DataHandleController::class,'handlePathVariable']);
Route::get('/data-handle/query-string',[\App\Http\Controllers\DataHandleController::class,'handleQueryString']);
Route::get('/data-handle/form',[\App\Http\Controllers\DataHandleController::class,'returnForm']);
Route::get('/data-handle/form',[\App\Http\Controllers\DataHandleController::class,'processForm']);


Route::get('/customer/register', [\App\Http\Controllers\CustomerController::class,'register']);
Route::post('/customer/register', [\App\Http\Controllers\CustomerController::class,'processRegister']);

Route::get('',[\App\Http\Controllers\LayoutController::class,'masterLayout']);
Route::get('/form',[\App\Http\Controllers\LayoutController::class,'create']);
Route::get('/list',[\App\Http\Controllers\LayoutController::class,'list']);

