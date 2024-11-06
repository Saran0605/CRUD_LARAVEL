<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tableController;

Route::get('/',[tableController::class,'disp']);
Route::post('/user/add',[tableController::class,'adduser']);
Route::delete('/user/delete/{id}',[tableController::class,'del']);
Route::get('/user/get/{id}',[tableController::class,'getuser']);
Route::post('/user/save/{id}',[tableController::class,'save']);
