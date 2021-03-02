<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\CommentController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/games',[GameController::class,'indexUser'])->name('view-main');


/*-Dashboard padrao do
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard',function(){
    return view('dashboard');
})->name('dashboard');
*/
//-----------------------------ADMIN-----------------------------------
Route::get('/admin/games',[GameController::class,'index'])->name('admin.games.index');
Route::get('admin/games/create',[GameController::class,'create'])->name('admin.games.create');
Route::post('admin/games/store',[GameController::class,'store'])->name('admin.games.store');
Route::delete('admin/games/{id}',[GameController::class,'destroy'])->name('admin.games.destroy');
Route::get('admin/games/edit/{id}',[GameController::class,'edit'])->name('admin.games.edit');
Route::put('admin/games/{id}',[GameController::class,'update'])->name('admin.games.update');
//-----------------------------ADMIN-----------------------------------

//-----------------------------COMMENTS-----------------------------------
Route::get('/comments/{game_id}',[CommentController::class,'index'])->name('comments.index')->middleware('auth');
Route::post('/comments/{game_id}/store',[CommentController::class,'store'])->name('comments.store')->middleware('auth');
Route::delete('/comments/delete/{comment_id}',[CommentController::class,'destroy'])->name('comments.destroy')->middleware('auth');
//-----------------------------COMMENTS-----------------------------------

Route::get("/games/about",[GameController::class,'about'])->name('about')->middleware('auth');
Route::get("/games/emulators",[GameController::class,'emulators'])->name('emulators')->middleware('auth');

