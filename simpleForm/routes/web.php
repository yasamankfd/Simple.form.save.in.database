<?php

use App\Http\Controllers\UsersController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/add', [UsersController::class,'index'])->name('add.index');
//Route::post('users', [PostController::class, 'store']);
Route::get('/add/form', [UsersController::class,'show'])->name('add.form');

Route::post('/add', [UsersController::class,'addingUser'])->name('add.user');
