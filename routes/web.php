<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;

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


Route::get('/', [TicketController::class, 'index'])->name('index.ticket');
Route::get('/create', [TicketController::class, 'create'])->name('create.ticket');
Route::post('/store', [TicketController::class, 'store'])->name('store.ticket');
Route::get('/show', [TicketController::class, 'show'])->name('show.ticket');
