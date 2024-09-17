<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class auth extends Controller
{
    public function index(){
        return view('auth.login');
    }
    public function register(){
        return view('auth.register');
    }
    public function forgotPassword(){
        return view('auth.forgotpassword');
    }
    public function store(){
        dd(request()->all());
    }
}
