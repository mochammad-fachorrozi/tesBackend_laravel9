<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesController;
use App\Http\Controllers\ArtisController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [TesController::class, 'index']);
Route::get('/sql', [TesController::class, 'sql']);

Route::controller(ArtisController::class)->group(function () {
    Route::get('/project', 'index');
    Route::get('/project/create', 'create');
    Route::post('/project/store', 'store');
    Route::get('/project/edit/{id}', 'edit');
    Route::post('/project/update', 'update');
    Route::get('/project/delete/{id}', 'destroy');
});
