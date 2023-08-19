<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\agent\AgentController;
use App\Http\Controllers\super\SuperController;
use App\Http\Controllers\admin\AdminAgentController;
use App\Http\Controllers\admin\AdminNumberController;
use App\Http\Controllers\admin\AdminAdminstratorController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
Route::get('admin/showprofile', [AdminController::class, 'showprofile'])->name('admin.showprofile');

Route::get('agent/dashboard', [AgentController::class, 'index'])->name('agent.dashboard');
Route::get('super/dashboard', [SuperController::class, 'index'])->name('super.dashboard');


Route::middleware('auth')->group(function () {

    // Agents route
    Route::prefix('agent')->name('agent.')->group(function () {
        Route::get('index', [AdminAgentController::class, 'index'])->name('index');
        Route::get('activeagent', [AdminAgentController::class, 'activeagent'])->name('activeagent');
        Route::get('inactiveagent', [AdminAgentController::class, 'inactiveagent'])->name('inactiveagent');
        Route::get('create', [AdminAgentController::class, 'create'])->name('create');
        Route::post('store', [AdminAgentController::class, 'store'])->name('store');
        Route::get('edit', [AdminAgentController::class, 'edit'])->name('edit');
        Route::post('update', [AdminAgentController::class, 'update'])->name('update');
        Route::post('delete', [AdminAgentController::class, 'delete'])->name('delete');
    });

    // Number route
    Route::prefix('number')->name('number.')->group(function () {
        Route::get('index', [AdminNumberController::class, 'index'])->name('index');
        Route::post('store', [AdminNumberController::class, 'store'])->name('store');
        Route::get('edit/{id}', [AdminNumberController::class, 'edit'])->name('edit');
        Route::post('update/{id}', [AdminNumberController::class, 'update'])->name('update');
        Route::post('delete/{id}', [AdminNumberController::class, 'destroy'])->name('delete');
        Route::post('status/{change}/{id}', [AdminNumberController::class, 'status'])->name('status');
    });

    // Adminstrator route
    Route::prefix('adminstrator')->name('adminstrator.')->group(function () {
        Route::get('index', [AdminAdminstratorController::class, 'index'])->name('index');
        Route::get('create', [AdminAdminstratorController::class, 'create'])->name('create');
        Route::post('store', [AdminAdminstratorController::class, 'store'])->name('store');
        Route::post('delete/{id}', [AdminAdminstratorController::class, 'destroy'])->name('destroy');


    });
});