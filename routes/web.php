<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\CommentController;

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard',function(){
    return redirect('/games');
});

Route::get('/', [GameController::class, 'welcome'])->name('welcome');
Route::post('/logout',[GameController::class,'logout']);

/*------------------------------------------*/

Route::group(['middleware'=>'auth','prefix'=>'games'],function(){
	Route::get('/',[GameController::class,'index_user'])->name('view-main');

	Route::get('/about',[GameController::class,'about'])->name('games.about');
	Route::get('/emulators',[GameController::class,'emulators'])->name('games.emulators');

	Route::get('/{game_id}',[GameController::class,'game_info'])->name('games.details');
	Route::post('/{game_id}/store',[CommentController::class,'store'])->name('comments.store');
	Route::delete('/delete/{comment_id}',[CommentController::class,'destroy'])->name('comments.destroy');
});

/*------------------------------------------*/

Route::group(['middleware'=>'authadmin','prefix'=>'admin'],function(){
	Route::get('/',function(){return redirect('/admin/games');});

	Route::get('/games',[GameController::class,'index_admin'])->name('admin.games.index');
	Route::get('/games/create',[GameController::class,'create'])->name('admin.games.create');
	Route::post('/games/store',[GameController::class,'store'])->name('admin.games.store');
	Route::delete('/games/{id}',[GameController::class,'destroy'])->name('admin.games.destroy');
	Route::get('/games/edit/{id}',[GameController::class,'edit'])->name('admin.games.edit');
	Route::put('/games/{id}',[GameController::class,'update'])->name('admin.games.update');

	Route::get('/users',[UserController::class,'index_admin'])->name('admin.users.index');
	Route::delete('/users/{id}',[UserController::class,'destroy'])->name('admin.users.destroy');

	Route::get('/comments',[CommentController::class,'index_admin'])->name('admin.comments.index');
});