<?php

use App\Http\Controllers\ContactController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ContactController::class, 'index']);
Route::post('/confirm', [ContactController::class, 'confirm']);
Route::post('/create', [ContactController::class, 'create']);
Route::get('/fix', [ContactController::class, 'fix']);
Route::get('/manager/find', [ContactController::class, 'find']);
Route::post('/manager', [ContactController::class, 'delete'])->name('manager.delete');
Route::get('/manager', [ContactController::class, 'manager']);
Route::get('/manager/reset', [ContactController::class, 'reset'])->name('manager.reset');
