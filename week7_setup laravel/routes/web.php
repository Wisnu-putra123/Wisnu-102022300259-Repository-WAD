<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/students', [StudentsController::class, 'index']);

// Route::get('/students', function () {
//     $students = DB::table('students')->get();
//     return view('students.index', ['students' => $students]);
// });
