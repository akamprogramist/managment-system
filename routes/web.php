<?php

use App\Http\Controllers\CustomerController;
use Inertia\Inertia;
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
    return Inertia::render('Welcome');
})->name('home');

Route::get('customer', [CustomerController::class, 'index']);
Route::get('customer/create', [CustomerController::class, 'create']);
Route::post('customer', [CustomerController::class, 'store']);
Route::get('customer/{customer}', [CustomerController::class, 'show']);
Route::get('customer/{customer}/edit', [CustomerController::class, 'edit']);
Route::post('customer/{customer}', [CustomerController::class, 'update']);
Route::delete('customer/{customer}', [CustomerController::class, 'destroy']);
