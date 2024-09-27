@extends('layouts.assetsLinks')

{{-- @dd($students) --}}

@section('content')
<div class="container">
  <div class="card">
    <h5 class="d-flex align-items-center justify-content-between card-header">
      ALL Students 
      <a class="btn" href="{{route('admin.student.add')}}">Add new Student</a>
      <span>Count: {{ $studentsCount }}</span>
    </h5>
    <div class="table-responsive text-nowrap">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>img</th>
            <th>Enrollments</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          @foreach ($students as $student)
          <tr>
            <td> <span>{{ $student->id }}</span></td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->email }}</td>
            <td>
              <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img (31).webp" alt="Avatar" width="50" class="img-fluid rounded-circle" />
            </td>
            <td>
              @foreach ($student->courses_by_student as $course)
              <span class="badge bg-label-primary me-1">{{ $course->title }}</span>
              @endforeach
            </td>
            <td>
              <div class="d-flex align-items-center justify-content-around">
                <a class="btn btn-info rounded-5" href="{{route('admin.student.show', $student->id)}}">Show</a>
                <a class="btn btn-success rounded-5" href="{{route('admin.student.edit', $student->id)}}">Edit</a>
                <form action="" method="POST">
                  @csrf
                  @method('delete')
                  <input type="text" name="id" value="{{$student->id}}" hidden />
                  <button class="btn btn-danger rounded-5" role="submit"><i class="bx bx-trash me-1"></i>
                    Delete
                  </button>
                </form>
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection