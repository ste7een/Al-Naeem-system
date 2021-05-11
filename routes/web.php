<?php

use Tabuna\Breadcrumbs\Trail;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Accountant\AccountantController;
use App\Http\Controllers\Financial\FinancialController;
use App\Http\Controllers\Administrator\AdministratorController;
use App\Http\Middleware\Role;

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

    /* Accountant Routes */
    Route::group(['namespace' => 'Accountant', 'prefix' => 'accountant'], function() {

        // HOME
        Route::get('/', [AccountantController::class, 'index'])->name('accountant-home');

        // FINANCIAL
        Route::get('/financial', [FinancialController::class, 'financial_home'])->name('financial-home');

    });

});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
