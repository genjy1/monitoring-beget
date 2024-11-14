<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminMiddleware;


Route::middleware('auth')->group(function (){
    #Logout
    Route::post('/logout', ['App\Http\Controllers\UserController', 'logout'])->name('logout');

    #Stats

    Route::get('/stats',['App\Http\Controllers\StatsController','index'])->name('stats.index');
    Route::get('/stats/totals',['App\Http\Controllers\StatsController','totals'])->name('stats.byDays');
    Route::get('/stats/proceeds',['App\Http\Controllers\StatsController','proceeds'])->name('stats.proceeds');

    #Sales

    Route::get('/sales',['App\Http\Controllers\SalesController','index'])->name('sales.index');
    Route::get('/sales/download',['\App\Http\Controllers\SalesController', 'createPDF'])->name('sales.download');

    #Show machines

//    Route::get('/api/machines/',['App\Http\Controllers\CommonController','index'])->name('common.home');
//    Route::get('/machine/{id}',['App\Http\Controllers\MachineController', 'show'])->name('machine.show');
    Route::get('/attach',['App\Http\Controllers\MachineController', 'attach'])->name('machine.attach');
    Route::patch('/attach/patch/{user_id}',['App\Http\Controllers\MachineController','attachPost'])->name('machine.attachPatch');
    Route::get('user/{id}/machines/state',['App\Http\Controllers\MachineController','showState'])->name('machine.showState');

    #Show personal account and feedback

    Route::get('/user/{id}/edit/account',['App\Http\Controllers\UserController','edit'])->name('user.edit');
    Route::get('/user/{id}/edit/requisites',['App\Http\Controllers\UserController','editRequisites'])->name('user.edit.requisites');
//    Route::get('/feedback',['App\Http\Controllers\UserController','feedback'])->name('common.feedback');


    #Actions w/ user account



    #Goods group

    Route::get('user/{id}/goods/list',['App\Http\Controllers\GoodsController','index'])->name('goods.list');
    Route::get('/goods/state',['App\Http\Controllers\GoodsController','showState'])->name('goods.state');
    Route::post('goods/store',['App\Http\Controllers\GoodsController','store'])->name('goods.store');
    Route::patch('goods/{id}/destroy',['App\Http\Controllers\GoodsController','destroy'])->name('goods.destroy');

    #Debug routes
    Route::middleware(AdminMiddleware::class)->group(function (){
        Route::get('/debug/user_name',['App\Http\Controllers\UserController','getName'])->name('getName');
        Route::get('/debug/feedback',['App\Http\Controllers\UserController','getFeedbackWithNames'])->name('getFeedback');
        Route::get('/debug/automat/',['App\Http\Controllers\TestAutomatController','index']);
        Route::get('/debug/automat/show',['App\Http\Controllers\TestAutomatController','showResponse']);
        Route::patch('/user/{id}/update/role',['App\Http\Controllers\UserController','changeRole'])->name('changeRole');
    });
});

#API
Route::middleware('auth:sanctum')->get('/user', ['App\Http\Controllers\UserController', 'user']);



#Registration, authorization, authentication
//Route::get('/',['App\Http\Controllers\UserController','login']);
//Route::get('/login',['App\Http\Controllers\UserController', 'login'])->name('login');
//Route::post('/login/post',['App\Http\Controllers\UserController', 'loginPost'])->name('loginPost');
//Route::get('/register',['App\Http\Controllers\UserController','showRegisterView'])->name('showRegisterView');

#Forget password
Route::get('/forgot-password',['App\Http\Controllers\UserController','forgotPassword'])->name('forgot-password');

