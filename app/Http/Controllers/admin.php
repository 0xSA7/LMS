<?php

namespace App\Http\Controllers;

class admin extends Controller
{
  public function dashboard()
  {
    return view('admin.index');
  }
  public function edit($id)
  {
    return view('admin.edit');
  }
}
