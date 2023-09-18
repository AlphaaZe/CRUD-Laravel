<?php

use App\Http\Controllers\GuruController;
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

Route::get('/guru', [GuruController::class, 'index' ])->name('guru');
Route::get('/tambahguru', [GuruController::class, 'tambahguru' ])->name('tambahguru');
Route::post('/inputguru', [GuruController::class, 'inputguru' ])->name('inputguru');
Route::get('/tampilguru/{id}', [GuruController::class, 'tampilguru' ])->name('tampilguru');
Route::post('/updateguru/{id}', [GuruController::class, 'updateguru' ])->name('updateguru');
Route::get('/hapus/{id}', [GuruController::class, 'hapus' ])->name('hapus');
