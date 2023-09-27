<?php

use Illuminate\Support\Facades\Route;

// Controllers
// Guest
use App\Http\Controllers\MainController;
use App\Http\Controllers\Admin\MainController as AdminMainController;
use App\Http\Controllers\Admin\PostController as AdminPostController;
use App\Http\Controllers\Admin\TypeController as AdminTypeController;
use App\Http\Controllers\Admin\TagController as AdminTagController;

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

Route::get('/', [MainController::class, 'index'])->name('home');

Route::prefix('admin')          // Il prefix è il prefisso dell'URI (cioè la parte iniziale dell'URI che definirò nelle rotte del gruppo)
    ->name('admin.')            // Il name è il prefisso del nome delle rotte che definirò nel gruppo
    ->middleware('auth')
    ->group(function () {

    Route::get('/dashboard', [AdminMainController::class, 'dashboard'])->name('dashboard');

    Route::resource('posts', AdminPostController::class);
    Route::resource('types', AdminTypeController::class);
    Route::resource('tags', AdminTagController::class);

});

require __DIR__.'/auth.php';
