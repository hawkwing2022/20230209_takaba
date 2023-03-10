<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [TodoController::class, 'index']);
Route::post('/add', [TodoController::class, 'create']);
Route::post('/modify', [TodoController::class, 'modify']);
Route::post('/delete', [TodoController::class, 'delete']);