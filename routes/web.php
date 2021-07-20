<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DataHandleController;
use App\Http\Controllers\DemoValidateController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\LayoutController;
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
Route::get('/user/register', [HelloController::class,'register']);
Route::post('/user/register', [HelloController::class,'processRegister']);

Route::get('/data-handle/{id}/path',[DataHandleController::class,'handlePathVariable']);
Route::get('/data-handle/query-string',[DataHandleController::class,'handleQueryString']);
Route::get('/data-handle/form',[DataHandleController::class,'returnForm']);
Route::get('/data-handle/form',[DataHandleController::class,'processForm']);


Route::get('/customer/register', [CustomerController::class,'register']);
Route::post('/customer/register', [CustomerController::class,'processRegister']);

Route::get('',[LayoutController::class,'masterLayout']);
Route::get('/form',[LayoutController::class,'create']);
Route::get('/list',[LayoutController::class,'list']);

Route::get('/Events/create',[EventController::class,'create']);
Route::post('/Events/create',[EventController::class,'store']);
Route::get('/Events/list',[EventController::class,'index']);
Route::get('/Events/edit/{id}',[EventController::class,'update']);
Route::post('/Events/edit/{id}',[EventController::class,'save']);
Route::delete('/Events/delete/{id}',[EventController::class,'delete']);


Route::get('/demo/validate/create',[DemoValidateController::class,'create']);
Route::post('/demo/validate/store',[DemoValidateController::class,'store']);

