<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Administrator\AdministratorController;

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

Route::group(['middleware' => ['auth', Role::class]], function() {

    /* Main Routes */
    Route::get('/', [MainController::class, 'index'])->name('home');

    /* Administrator Routes */
    Route::group(['namespace' => 'Administrator', 'prefix' => 'administrator'], function() {

        // HOME
        Route::get('/', [AdministratorController::class, 'index'])->name('administrator-home');

    });

});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
