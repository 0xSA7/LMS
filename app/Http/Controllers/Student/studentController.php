<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;

class studentController extends Controller
{
  public function index()
  {
    return view('courses.index');
  }
}
