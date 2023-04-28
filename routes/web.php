<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BillsController;
use App\Http\Controllers\CustomerController;

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


Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return Inertia::render('Welcome');
    })->name('home');

    // customer routes
    Route::get('customer', [CustomerController::class, 'index'])->name('customer');
    Route::get('customer/create', [CustomerController::class, 'create']);
    Route::post('customer', [CustomerController::class, 'store']);
    Route::get('customer/{customer}', [CustomerController::class, 'show']);
    Route::get('customer/{customer}/edit', [CustomerController::class, 'edit']);
    Route::post('customer/{customer}', [CustomerController::class, 'update']);
    Route::delete('customer/{customer}', [CustomerController::class, 'destroy']);

    // todo routes
    Route::get('customer/{customer}/todo', [TodoController::class, 'index'])->name('todo');
    Route::post('/todo/{todo}', [TodoController::class, 'store']);
    Route::delete('/todo/{todo}', [TodoController::class, 'destroy']);

    // bills
    Route::get('/bills', [BillsController::class, 'index'])->name('bills');
    Route::get('/bills/create', [BillsController::class, 'create']);
    Route::get('/bills', [BillsController::class, 'store']);
});




Route::get('/register', [UserController::class, 'create'])->name('register');
Route::post('/users', [UserController::class, 'store']);
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
Route::delete('/logout', [UserController::class, 'logout']);
