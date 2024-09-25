@extends('layouts.assetsLinks')

@section('content')
<div class="container py-5">
  <h3 class="h5 d-flex align-items-center justify-content-between">
    ALL Students <span>Count: {{ $studentsCount }}</span>
  </h3>
  <div class="table-responsive text-nowrap">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>img</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        @foreach ($students as $student)
        <tr>
          <td> <span>{{ $student->id }}</span></td>
          <td>{{ $student->name }}</td>
          <td>
          <ul class="list-unstyled m-0 avatar-group d-flex align-items-center">
            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
            class="avatar avatar-xs pull-up" title="Lilian Fuller">
            <img src="{{asset('assets/img/avatars/1.png')}}" alt="Avatar" class="rounded-circle img-fluid" width="100" />
            </li>
          </ul>
          </td>
          <!-- <td>
            @foreach ($student->courses_by_student as $course)
            <span class="badge bg-label-primary me-1">{{ $course->title }}</span>
            @endforeach
          </td> -->
          <td>
          <a href="{{route('admin.students.show', $student->id)}}" class="btn btn-info">Show</a>
          <a href="{{route('admin.students.edit', $student->id)}}" class="btn btn-success">Edit</a>
          <a href="{{route('admin.students.destroy', $student->id)}}" class="btn btn-danger">Delete</a>
          <div class="dropdown">
            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
            <i class="bx bx-dots-vertical-rounded"></i>
            </button>
            <a class="" href="edit/{{ $student->id }}">
              <i class="bx bx-edit-alt me-1"></i> Edit
            </a>
            <a class="" href="javascript:void(0);">
              <i class="bx bx-trash me-1"></i> Delete
            </a>
            </div>
          </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection