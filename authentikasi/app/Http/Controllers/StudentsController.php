<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class StudentsController extends Controller
{
    public function index()
    {
        $students = DB::table('students')->get();
        return view('students.index', ['students' => $students]);
    }


}