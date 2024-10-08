<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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



Route::get('user/{user}', [UserController::class, 'show'])->name('user.show');
//convenção que index é para listar
Route::get('users', [UserController::class,'index'])->name('user.index');


Route::get('/', function(){
    return view('welcome');
});