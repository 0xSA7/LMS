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
    $validated_user = request()->validate([
      'name' => ['required'],
      'email' => ['required'],
      'password' => ['required', Password::min(6), 'confirmed'],
    ]);
    $validated_user['password'] = Hash::make($validated_user['password']);
    $user = User::create($validated_user);
    FacadesAuth::login($user);
    return redirect('/');
  }

  public function login(Request $request)
  {
    $validated_user = $request->validate([
      'email' => ['required', 'email'],
      'password' => ['required'],
    ], [
      'email.required' => 'Email is required',
      'email.email' => 'Email or password is incorrect',
      'password.required' => 'Password is required',
    ]);
    if (FacadesAuth::attempt($validated_user)) {
      $user = FacadesAuth::user();
      if ($user->role == 'admin') {
        request()->session()->regenerate();
        return redirect('/admin/students');
      } else if ($user->role == 'instructor') {
        request()->session()->regenerate();
        return redirect('/student');
      } else {
        request()->session()->regenerate();
        return redirect('/student');
      }
    }
    return dd('error');
  }
  public function showProfile()
  {
    $user = FacadesAuth::user();
    dd($user);
    $student_courses = User::find($user->id)->courses_by_student;
    return view('layouts.profile', compact('user', 'student_courses'));
  }
  public function updateProfile(Request $request)
  {
    $user = FacadesAuth::user();
    $userM = User::find($user->id);
    $validated_user = $request->validate([
      'name' => ['required'],
      'email' => ['required'],
      'phone' => 'required|regex:/(01)[0-9]{9}/',
    ]);
    $userM['name'] = $validated_user['name'];
    $userM['email'] = $validated_user['email'];
    $userM['phone'] = $validated_user['phone'];
    $userM->save();
    return redirect('profile');
  }
  public function destroy()
  {
    FacadesAuth::logout();
    return redirect('/');
  }
}
