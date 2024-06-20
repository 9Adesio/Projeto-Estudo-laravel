<?php


use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users/store', [UserController::class, 'store'])->name('users.store');
Route::put('/users/{user}/update', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/destroy', [UserController::class, 'destroy'])->name('users.destroy');




// Route:: get('/supports', [SuporteController::class,'index'])->name('supports.index');

// Route::get('/contato', [SiteController::class, 'contact']);


Route::get('/', function () {
    return view('welcome');
})->name('index');
