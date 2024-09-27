@extends('layouts.assetsLinks')

@section('content')
<div class="container">
  <div class="card">
    <h5 class="d-flex align-items-center justify-content-between card-header">
      ALL Instructors 
      <a class="btn" href="{{route('admin.instructor.add')}}">Add new Instructor</a>
      <span>Count: {{ $instructorsCount }}</span>
    </h5>
    <div class="table-responsive text-nowrap">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>img</th>
            <th>Courses Created</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          @foreach ($instructors as $instructor)
          <tr>
            <td> <span>{{ $instructor->id }}</span></td>
            <td>{{ $instructor->name }}</td>
            <td>{{ $instructor->email }}</td>
            <td>
              <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img (31).webp" alt="Avatar" width="50" class="img-fluid rounded-circle" />
            </td>
            <td>
              @foreach ($instructor->courses_by_instructor as $course)
              <span class="badge bg-label-primary me-1">{{ $course->title }}</span>
              @endforeach
            </td>
            <td>
              <div class="d-flex align-items-center justify-content-around">
                <a class="btn btn-info rounded-5" href="{{route('admin.instructor.show', $instructor->id)}}">Show</a>
                <a class="btn btn-success rounded-5" href="{{route('admin.instructor.edit', $instructor->id)}}">Edit</a>
                <form action="" method="POST">
                  @csrf
                  @method('delete')
                  <input type="text" name="id" value="{{$instructor->id}}" hidden />
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