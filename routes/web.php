<?php

use App\Http\Controllers\TicketController;
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
    return view('layout.app');
});

Route::get('mytic', [TicketController::class,'index']);

Route::get('new', function () {
    return view('new_teckets');
});

Route::get('show', function () {
    return view('show_tickets');
});

Route::post('store', [TicketController::class,'store']);
