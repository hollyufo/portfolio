<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/', [HomeController::class, 'store']);
Route::get('/allprojects', [HomeController::class, 'allprojects']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
    // route to delete a message
    Route::delete('/dashboard/{id}', [HomeController::class, 'destroy'])->name('dashboard.destroy');
    // route to display project
    Route::get('/project', [HomeController::class, 'project'])->name('project');
    // route to sva a project
    Route::post('/add-project', [HomeController::class, 'storeProject'])->name('project.store');
    // route to displqy the add project form
    Route::get('/add-project', [HomeController::class, 'addProject'])->name('add-project');

});

require __DIR__.'/auth.php';
