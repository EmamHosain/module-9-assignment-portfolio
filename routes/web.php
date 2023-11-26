<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\singleController;
use App\Http\Controllers\HomeController;

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


Route::get('/home',[HomeController::class,'home']);

Route::get('/hello',singleController::class);


Route::prefix('admin')->middleware(['isAdmin'])->group(function(){
 Route::get('/',[adminController::class,'admin']);
 Route::get('/dashbord',[adminController::class,'adminDashbord']);
});

Route::prefix('user')->middleware(['isUser'])->group(function(){
    Route::get('/',[userController::class,'userHome']);
    Route::get('/userId',[userController::class,'userId']);
   });