<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    const CATEGORIES = [
        'programming',
        'medical',
        'accounting',
        'others'
      ];
      public function instructor()
      {
        return $this->belongsTo(User::class, 'instructor_id');
      }
      public function students_in_course()
      {
        return $this->belongsToMany(User::class, 'enrollments', 'course_id', 'student_id');
      }
}
