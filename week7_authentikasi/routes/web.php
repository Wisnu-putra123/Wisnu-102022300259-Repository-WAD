<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::Class, 'index']);
Route::post('/login', [LoginController::class, 'authentikasi']);

Route::get('/students', [StudentsController::class, 'index']);

Route::get('/logout', function () {
    session()->forget('user');
    return redirect('/login');
});