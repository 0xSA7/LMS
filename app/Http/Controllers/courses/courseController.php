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
    $categories = Course::CATEGORIES;
    return view('courses.index', compact('courses', 'categories'));
  }
  public function show($id)
  {
    $course = Course::find($id);
    $courseInstructor = $course->instructor;
    $students_in_course = $course->students_in_course->count();
    $user = Auth::User();
    $isEnrollment = false;
    if ($user) {
      $isEnrollment = $course->students_in_course->find($user);
    }
    return view('courses.course-details', compact('course', 'courseInstructor', 'students_in_course', 'isEnrollment'));
  }
}
