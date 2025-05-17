<?php

namespace App\Http\Controllers;

use App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller{
    
    public function index(){
        return view('login.index');
    }
    public function authentikasi(Request $request)
{
    $email = $request->input('email');
    $password = $request->input('password');

    
    $validEmail = 'wisnu@gmail.com';
    $validPassword = '123';

    if ($email === $validEmail && $password === $validPassword) {
        
        session(['user' => $email]); 
        return redirect('/students');
    }

    return back()->withErrors([
        'email' => 'Email atau password salah',
    ])->withInput();
    }
}