<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BienController;

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
Route::get('/bien', [BienController::class, 'index'])->name('bien.index');
Route::get('/bien/create', [BienController::class, 'create'])->name('bien.create');
Route::post('/bien', [BienController::class, 'store'])->name('bien.store');
Route::delete('/bien/del/{id}', [BienController::class, 'destroy'])->name('bien.destroy');
Route::post('/bien/{id}', [BienController::class, 'update'])->name('bien.update');
Route::get('/bien/{id}', [BienController::class, 'edit'])->name('bien.edit');




Route::get('/', function () {
    return view('welcome');
});
