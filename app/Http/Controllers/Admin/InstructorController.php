<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class InstructorController extends Controller
{
  public function index()
  {
    $instructors = User::with('courses_by_instructor')->instructors()->get();
    $instructorsCount = User::instructors()->count();
    return view('admin.instructors.index', compact('instructors', 'instructorsCount'));
  }
  public function edit($id)
  {
    $instructor = User::find($id);
    return view('admin.instructors.instructor-edit', compact('instructor'));
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
      $validated_user = $req->validate([
        'phone' => 'regex:/(01)[0-9]{9}/',
      ]);
      $userM['phone'] = $validated_user['phone'];
    }
    $userM['name'] = $validated_user['name'];
    $userM['email'] = $validated_user['email'];
    $userM->save();
    return redirect('admin/instructors');
  }
  public function show($id)
  {
    $instructor = User::find($id);
    $courses = $instructor->courses_by_instructor;
    return view('admin.instructors.instructor-show', compact('instructor', 'courses'));
  }
  public function destroy(Request $req)
  {
    $user = User::find($req['id']);
    $user->delete();
    return redirect()->back();
  }
  public function add()
  {
    return view('admin.instructors.instructor-add');
  }
  public function store(Request $req)
  {
    $newInstructor = new User();
    $validated_user = request()->validate([
      'name' => ['required'],
      'email' => ['required'],
      'password' => ['required', Password::min(6)],
    ]);
    if($req->phone) {
      $validated_user = request()->validate([
        'phone' => 'regex:/(01)[0-9]{9}/',
      ]);
      $newInstructor->phone = $validated_user['phone'];
    }
    $validated_user['password'] = Hash::make($validated_user['password']);
    $newInstructor->name = $validated_user['name'];
    $newInstructor->email = $validated_user['email'];
    $newInstructor->password = $validated_user['password'];
    $newInstructor->role = 'instructor';
    $newInstructor->save();
    return redirect('/admin/instructors');
  }
}
