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
    $student = User::find($id);
    return view('admin.edit', compact('student'));
  }
  public function update(Request $req)
  {
    $userID = $req->id;
    $userM = User::find($userID);
    // dd($userM);
    $validated_user = $req->validate([
      'name' => ['required'],
      'email' => ['required'],
      'phone' => 'required|regex:/(01)[0-9]{9}/',
    ]);
    $userM['name'] = $validated_user['name'];
    $userM['email'] = $validated_user['email'];
    $userM['phone'] = $validated_user['phone'];
    $userM->save();
    return redirect('admin/students');
  }
  public function show($id)
  {
    $stuId = $id;
    return view('admin.edit', ['id' => $stuId]);
  }
  public function destroy(Request $req)
  {
    // to be cont...
    User::destroy($req['id']);
    return redirect()->back();
  }
  public function store($id)
  {
    $stuId = $id;
    return view('admin.edit', ['id' => $stuId]);
  }
}
