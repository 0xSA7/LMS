<?php

namespace App\Http\Controllers\Course;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
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
