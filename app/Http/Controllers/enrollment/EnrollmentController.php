<?php

namespace App\Http\Controllers\Enrollment;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    public function store($courseId){
        

        return redirect()->route('home')->with('success', 'Enrollment request submitted successfully');
    }
}
