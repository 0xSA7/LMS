<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class studentController extends Controller
{
  public function index()
  {
    $students = User::with('courses_by_student')->students()->get();
    $studentsCount = User::students()->count();
    return view('admin.index', compact('students', 'studentsCount'));
  }
  public function edit($id)
  {
    $stuId = $id;
    return view('admin.edit', ['id' => $stuId]);
  }
}
