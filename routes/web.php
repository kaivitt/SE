<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\NotiController;
use App\Http\Controllers\AuthUserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthAdminController;
use App\Http\Controllers\UserOrAdminController;
use App\Http\Controllers\HistoryDetailController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
| 
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home',[HomeController::class,'index']); 
Route::get('/homeAdmin',[HomeController::class,'indexAdmin']); 

Route::post('/History',[HistoryController::class,'index'])->name('History.index');
Route::post('Notification',[NotiController::class,'index'])->name('Notification.index');  

Route::get('/login',[AuthUserController::class,'login'])->name('login');  
Route::post('/login',[AuthUserController::class,'loginPost'])->name('login'); 
Route::delete('/logout',[AuthUserController::class,'logout'])->name('logout');

Route::get('/loginAdmin',[AuthAdminController::class,'loginAdmin'])->name('loginAdmin');  
Route::post('/loginAdmin',[AuthAdminController::class,'loginPostAdmin'])->name('loginAdmin'); 
Route::delete('/logoutAdmin',[AuthAdminController::class,'logoutAdmin'])->name('logoutAdmin');

Route::get('/info/{id}',[HistoryDetailController::class,'index'])->name('info');

Route::get('/UserOrAdmin',[UserOrAdminController::class,'index']); 
