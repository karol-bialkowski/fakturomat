<?php

use App\Http\Controllers\InvoicesController;
use App\Http\Controllers\CustomersController;
use Illuminate\Support\Facades\Auth;
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
    return view('index');
});

Route::get('/faktury', [InvoicesController::class, 'index'])->name('invoices.index')->middleware('auth');


Route::get('/faktury/dodaj', [InvoicesController::class, 'create'])->name('invoices.create')->middleware('auth');
Route::get('/faktury/edytuj/{id}', [InvoicesController::class, 'edit'])->name('invoices.edit')->middleware('auth');;
Route::post('/faktury/zapisz', [InvoicesController::class, 'store'])->name('invoices.store')->middleware('auth');;
Route::put('/faktury/zmien/{id}', [InvoicesController::class, 'update'])->name('invoices.update')->middleware('auth');;
Route::delete('/faktury/usuń/{id}', [InvoicesController::class, 'delete'])->name('invoices.delete')->middleware('auth');;

Route::resource('/klienci', CustomersController::class, ['names' => 'customers'])->middleware('auth');;

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'login'])->name('login');
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('register');



