<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {return view('welcome');});
// View : Dashboard / affiche les Users et un user unique
Route::get('/users', [UserController::class, 'profil']);
Route::get('/users/view/{id}', [UserController::class, 'viewuser'])->name('viewuser');
Route::post('/users/delete/{id}', [UserController::class, 'deleteuser'])->name('deleteuser');
Route::post('/users/update/{id}', [UserController::class, 'updateuser'])->name('updateuser');