<?php

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

Route::get('/', function () {
    return view('welcome');
});


use App\Http\Controllers\TestController;
Route::get('test', [TestController::class, 'index']);
Route::get('add', [TestController::class, 'add']);
Route::post('add', [TestController::class, 'create']);
Route::get('dell', [TestController::class, 'dell']);
Route::post('dell', [TestController::class, 'delete']);
Route::get('edit', [TestController::class, 'edit']);
Route::post('edit', [TestController::class, 'update']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
