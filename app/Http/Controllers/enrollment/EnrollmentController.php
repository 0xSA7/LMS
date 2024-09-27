<?php

namespace App\Http\Controllers\Enrollment;

use App\Http\Controllers\Controller;
use App\Models\Enrollment;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;

class EnrollmentController extends Controller
{
  public function store($courseID)
  {
    Enrollment::create([
      'student_id' => Auth::User()->id,
      'course_id' => $courseID
    ]);
    return redirect()->back();
  }
  public function destroy($courseID)
  {
    Enrollment::where('student_id', Auth::User()->id)
              ->where('course_id', $courseID)
              ->delete();
    return redirect()->back();
  }
}
