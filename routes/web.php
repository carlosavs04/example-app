<?php

use App\Http\Controllers\DataController;
use App\Models\Data;
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
    return view('data', ['data' => Data::all()]);
});

Route::get('/index', [DataController::class, 'index']);
Route::post('/create', [DataController::class, 'create'])->name('create');
Route::get('/delete/{id}', [DataController::class, 'delete'])->name('delete');