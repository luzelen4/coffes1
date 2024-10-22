<?php

use Illuminate\Support\Facades\Route;
use App\Http\Requests\CoffesRequest;

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

// Route::get(
//     '/testdb',
//     [\App\Http\Controllers\TestController::class, 'testDB']
// );


Route::resource(
    '/coffes',
    \App\Http\Controllers\CoffesController::class
);

