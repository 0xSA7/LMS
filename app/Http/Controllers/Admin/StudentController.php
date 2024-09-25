<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class StudentController extends Controller
{
  public function index()
  {
    $students = User::with('courses_by_student')->students()->get();
    $studentsCount = User::students()->count();
    return view('admin.students', compact('students', 'studentsCount'));
  }
  public function show($id)
  {
    return view('admin.student-show', compact('student'));
  }
  public function edit($id)
  {
    return view('admin.student-edit', compact('student'));
  }
  public function destroy($id)
  {
    return redirect('/admin/students');
  }
}
