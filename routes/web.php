<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\RakitController;
use App\Http\Controllers\ProcessorController;
use App\Http\Controllers\IntelController;
use App\Http\Controllers\AmdController;
use App\Http\Controllers\VgaController;
use App\Http\Controllers\RamController;
use App\Http\Controllers\MotherboardController;
use App\Http\Controllers\PsController;
use App\Http\Controllers\ListrakitController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

Route::resource('/processor', ProcessorController::class)->middleware('is_admin');
Route::resource('/intel', IntelController::class)->middleware('is_admin');
Route::resource('/amd', AmdController::class)->middleware('is_admin');
Route::resource('/vga', VgaController::class)->middleware('is_admin');
Route::resource('/ram', RamController::class)->middleware('is_admin');
Route::resource('/motherboard', MotherboardController::class)->middleware('is_admin');
Route::resource('/ps', PsController::class)->middleware('is_admin');

Route::resource('/rakit', RakitController::class);
Route::resource('/listrakit', ListrakitController::class);



