<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admin extends Controller
{
    public function dashboard(){
        return view('admin.index');
    }
    public function edit($id){
        return view('admin.edit');
    }
}
