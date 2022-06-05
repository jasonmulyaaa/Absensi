<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AbsenController;
use App\Http\Controllers\RayonController;
use App\Http\Controllers\RombelController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AdminController;


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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
Route::resource('absen', AbsenController::class)->middleware(['auth']);
route::resource('rayon', RayonController::class)->middleware(['auth']);
Route::resource('rombel', RombelController::class)->middleware(['auth']);
Route::resource('student', StudentController::class)->middleware(['auth']);
Route::resource('admin', AdminController::class)->middleware(['auth']);

