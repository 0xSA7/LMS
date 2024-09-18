<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class auth extends Controller
{
    public function showingLoginForm()
    {
        return view('auth.login');
    }
    public function register()
    {
        return view('auth.register');
    }
    public function forgotPassword()
    {
        return view('auth.forgotpassword');
    }
    public function store()
    {
       $validated_user =request()->validate([
            'name' => ['required'],
            'email' => ['required'],
            'password' => ['required',Password::min(6),'confirmed'],
        ]);
        $validated_user['password'] = Hash::make($validated_user['password']);
       $user= User::create($validated_user);

       FacadesAuth::login($user);

       return redirect('/student');
    }

    public function login(Request $request){
        $validated_user = $request->validate([
            'email' => ['required','email'],
            'password' => ['required'],
        ]);
        // dd($validated_user);
        if(FacadesAuth::attempt($validated_user)){
            $user = FacadesAuth::user() ;
            if($user->role == 'admin'){
                request()->session()->regenerate();
                 return redirect('/admin/students');
            }else if($user->role == 'instructor'){
                request()->session()->regenerate();
                return redirect('/student');
            }else{
                request()->session()->regenerate();
                return redirect('/student');
            }
       }
       
        return dd('error') ;
    }

    public function destroy(){
        
        FacadesAuth::logout();
        return redirect('/');
    }
}
