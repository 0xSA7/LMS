<?php

namespace App\Http\Controllers\Enrollment;

use App\Http\Controllers\Controller;
use App\Models\Enrollment;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;

class EnrollmentController extends Controller
{
  public function store($courseId)
  {
    $course = Course::find($courseId);
    if (!$course) {
      return redirect()->back()->with('error', 'Course not found!');
    }
    Enrollment::create([
      'student_id' => Auth::User()->id,
      'course_id' => $courseId
    ]);
    return redirect()->back();
  }
}
