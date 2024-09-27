<?php

namespace App\Http\Controllers\Instructor;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
  public function index() {
    $userID = Auth::user()->id;
    $instructor = User::find($userID);
    $courses = $instructor->courses_by_instructor;
    return view('instructor.courses.index', compact('instructor', 'courses'));
  }
  public function edit($id)
  {
    $course = Course::find($id);
    return view('instructor.courses.course-edit', compact('course'));
  }
  public function update(Request $req)
  {
    $crsID = $req->id;
    $crsM = Course::find($crsID);
    $validated_crs = $req->validate([
      'title' => ['required'],
      'description' => ['required'],
    ]);
    $crsM['title'] = $validated_crs['title'];
    $crsM['description'] = $validated_crs['description'];
    $crsM->save();
    return redirect('/instructor/courses');
  }
  public function store(Request $req)
  {
    $validated_crs = $req->validate([
      'title' => ['required'],
      'description' => ['required'],
    ]);
    $newcrs = new Course();
    $newcrs->title = $validated_crs['title'];
    $newcrs->description = $validated_crs['description'];
    $newcrs->category = 'others';
    $newcrs->instructor_id = Auth::user()->id;
    $newcrs->save();
    return redirect('/instructor/courses');
  }
  public function destroy(Request $req) {
    Course::find($req['id'])->delete();
    return redirect()->back();
  }
}
