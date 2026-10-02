<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MotorController;

Route::get('/motors',[MotorController::class, 'index']);
Route::get('/motors/create', [MotorController::class, 'create']); 
Route::post('motors', [MotorController::class, 'store']);