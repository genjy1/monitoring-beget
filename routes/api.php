<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('user/{id}/machines/',['App\Http\Controllers\CommonController','index'])->name('common.home');
Route::get('machine/{id}',['App\Http\Controllers\MachineController', 'show'])->name('machine.show');
Route::get('machine/state',['App\Http\Controllers\MachineController','showState'])->name('machine.state');
Route::patch('/machine/{id}/update',['App\Http\Controllers\MachineController','update'])->name('machine.update');

Route::get('sales',['App\Http\Controllers\SalesController','api']);
Route::post('login', ['App\Http\Controllers\UserController', 'loginPost']);
Route::post('feedback',['App\Http\Controllers\UserController', 'sendFeedback'])->name('common.sendFeedback');
Route::post('/forgot-password-post',['App\Http\Controllers\UserController','forgotPasswordPost'])->name('forgot-password-post');
Route::post('/register',['App\Http\Controllers\UserController','registerPost'])->name('registerPost');


Route::get('/goods/list',['App\Http\Controllers\GoodsController','index'])->name('goods.list');
Route::get('/goods/state',['App\Http\Controllers\GoodsController','showState'])->name('goods.state');
Route::patch('goods/{id}/destroy',['App\Http\Controllers\GoodsController','destroy'])->name('goods.destroy');

Route::patch('/user/{id}/update/name',['App\Http\Controllers\UserController','changeUserName'])->name('changeUserName');

Route::patch('/user/{id}/update/email',['App\Http\Controllers\UserController','changeEmail'])->name('changeEmail');
Route::patch('/user/{id}/update/fio',['App\Http\Controllers\UserController','changeFio'])->name('changeFio');
Route::post('/user/{id}/requisites/create',['App\Http\Controllers\RequisitesController','create'])->name('requisites.create');
Route::patch('/user/{id}/update/password',['App\Http\Controllers\UserController','changePassword'])->name('changePassword');
Route::patch('/user/{id}/update/Tz',['App\Http\Controllers\UserController','changeTz'])->name('changeTz');
Route::get('/confirm/{token}',['App\Http\Controllers\UserController','confirm'])->name('confirmation');

Route::post('/forgot-password', [UserController::class, 'forgotPasswordLink']);
Route::post('/reset-password', [UserController::class, 'reset'])->name('password.reset');


Route::middleware('auth:sanctum')->post('/logout', [UserController::class, 'logout']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
