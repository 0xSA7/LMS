<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class studentController extends Controller
{
  public function index()
  {
    $students = User::with('courses_by_student')->students()->get();
    $studentsCount = User::students()->count();
    return view('admin.students.index', compact('students', 'studentsCount'));
  }
  public function edit($id)
  {
    $student = User::find($id);
    return view('admin.students.student-edit', compact('student'));
  }
  public function update(Request $req)
  {
    $userID = $req->id;
    $userM = User::find($userID);
    $validated_user = $req->validate([
      'name' => ['required'],
      'email' => ['required'],
    ]);
    if ($req->phone) {
      $validated_user += $req->validate([
        'phone' => 'regex:/(01)[0-9]{9}/',
      ]);
      $userM['phone'] = $validated_user['phone'];
    }
    $userM['name'] = $validated_user['name'];
    $userM['email'] = $validated_user['email'];
    $userM->save();
    return redirect('admin/students');
  }
  public function show($id)
  {
    $student = User::find($id);
    $courses = $student->courses_by_student;
    return view('admin.students.student-show', compact('student', 'courses'));
  }
  public function destroy(Request $req)
  {
    $user = User::find($req['id']);
    $user->delete();
    return redirect()->back();
  }
  public function add()
  {
    return view('admin.students.student-add');
  }
  public function store(Request $req)
  {
    $validated_user = request()->validate([
      'name' => ['required'],
      'email' => ['required'],
      'password' => ['required', Password::min(6)],
    ]);
    if($req->phone) {
      $validated_user += request()->validate([
        'phone' => 'regex:/(01)[0-9]{9}/',
      ]);
    }
    $validated_user['password'] = Hash::make($validated_user['password']);
    User::create($validated_user);
    return redirect('/admin/students');
  }
}
