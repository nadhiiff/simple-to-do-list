<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TaskController:: class, 'index']);
Route::post('/tasks', [TaskController:: class, 'store']);
Route::delete('/tasks/{task}', [TaskController:: class, 'destroy']);
