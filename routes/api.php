<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//controller collegato

use App\Http\Controllers\API\PostController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::name('api.')->group(function () {


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::name('posts.')
->group(function () {
Route::get('/posts',[PostController::class, 'index'])->name('index');
Route::get('/{post}',[PostController::class, 'show'])->name('show');
});
});