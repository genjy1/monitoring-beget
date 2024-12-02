<?php

use App\Http\Controllers\MachineController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::middleware(['auth:sanctum'])->group(function () {
    Route::post('/attach', [MachineController::class, 'attachPost']);
});



Route::get('/machine/{id}/settings',[\App\Http\Controllers\SettingsController::class,'getSettings']);
Route::post('/machine/{id}/settings/post',[\App\Http\Controllers\SettingsController::class, 'setSettings']);
Route::patch('/machine/{id}/settings/update',[\App\Http\Controllers\SettingsController::class, 'updateSettings']);
Route::patch('/machine/{id}/settings/bills',[\App\Http\Controllers\SettingsController::class,'updateBills']);
Route::get('/machine/{id}/settings/kassa',[\App\Http\Controllers\SettingsController::class,'getKassaSettings']);
Route::get('/machine/{id}/settings/qr',[\App\Http\Controllers\SettingsController::class, 'getQrPaymentsSettings']);
Route::patch('/machine/{id}/settings/kassa/update',[\App\Http\Controllers\SettingsController::class, 'setKassaSettings']);
Route::patch('/machine/{id}/settings/qr/update',[\App\Http\Controllers\SettingsController::class, 'setQrPaymentSettings']);
Route::patch('/machine/{id}/detach', [MachineController::class, 'detach']);
Route::get('/machine/{id}/events',[MachineController::class, 'getEvents']);
Route::get('/machine/{id}/sales',[MachineController::class, 'getSales']);
Route::get('/machine/{id}/goods_sold',[MachineController::class, 'getSoldGoods']);


Route::get('/user/{id}/machines/',['App\Http\Controllers\CommonController','index'])->name('common.home');
Route::get('/machine/{id}',['App\Http\Controllers\MachineController', 'show'])->name('machine.show');
Route::get('/machine/state',['App\Http\Controllers\MachineController','showState'])->name('machine.state');
Route::patch('/machine/{id}/update',['App\Http\Controllers\MachineController','update'])->name('machine.update');

Route::get('/sales',['App\Http\Controllers\SalesController','index']);
Route::post('/login', ['App\Http\Controllers\UserController', 'loginPost']);
Route::post('/feedback',['App\Http\Controllers\UserController', 'sendFeedback'])->name('common.sendFeedback');
Route::post('/forgot-password-post',['App\Http\Controllers\UserController','forgotPasswordPost'])->name('forgot-password-post');
Route::post('/register',['App\Http\Controllers\UserController','registerPost'])->name('registerPost');

Route::get('/goods/list',['App\Http\Controllers\GoodsController','index'])->name('goods.list');
Route::get('/goods/state',['App\Http\Controllers\GoodsController','showState'])->name('goods.state');
Route::patch('/goods/{id}/destroy',['App\Http\Controllers\GoodsController','destroy'])->name('goods.destroy');
Route::get('/good/{id}/show',['App\Http\Controllers\GoodsController','show'])->name('goods.show');

Route::patch('/user/{id}/update/name',['App\Http\Controllers\UserController','changeUserName'])->name('changeUserName');

Route::patch('/user/{id}/update/email',['App\Http\Controllers\UserController','changeEmail'])->name('changeEmail');
Route::patch('/user/{id}/update/fio',['App\Http\Controllers\UserController','changeFio'])->name('changeFio');
Route::post('/user/{id}/requisites/create',['App\Http\Controllers\RequisitesController','create'])->name('requisites.create');
Route::get('/user/{id}/requisites/',['App\Http\Controllers\RequisitesController','index'])->name('requisites.index');
Route::patch('/user/{id}/update/password',['App\Http\Controllers\UserController','changePassword'])->name('changePassword');
Route::patch('/user/{id}/update/Tz',['App\Http\Controllers\UserController','changeTz'])->name('changeTz');
Route::get('/confirm/{token}',['App\Http\Controllers\UserController','confirm'])->name('confirmation');

Route::post('/forgot-password', [UserController::class, 'forgotPasswordLink']);
Route::post('/reset-password', [UserController::class, 'reset'])->name('password.reset');


Route::middleware('auth:sanctum')->post('/logout', [UserController::class, 'logout']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
