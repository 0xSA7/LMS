<?php

namespace App\Http\Controllers\courses;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Course;

class courseController extends Controller
{
  public function index()
  {
    $courses = Course::all();
    return view('courses.index', compact('courses'));
  }
  public function show($id)
  {
    $user = Auth::User()->id;
    $course = Course::find($id);
    $courseInstructor = $course->instructor;
    $students_in_course = $course->students_in_course->count();
    $isEnrollment = $course->students_in_course->find($user);
    return view('courses.course-details', compact('course', 'courseInstructor', 'students_in_course', 'isEnrollment'));
  }
}
