@extends('layouts.assetsLinks')

@section('content')
<div class="container-xxl">
  <div class="authentication-wrapper authentication-basic container-p-y">
    <div class="authentication-inner">
      <!-- Register Card -->
      <div class="card px-sm-6 px-0">
        <div class="card-body">
          <form id="formAuthentication" method="POST" class="mb-6" action="{{route('instructor.course.update', $course->id)}}">
            @csrf
            @method('PUT')
            <input type="text" class="form-control" name="id" value="{{$course->id}}" hidden />
            <div class="mb-6">
              <label for="crsname" class="form-label">Course Name</label>
              <input type="text" class="form-control" id="crsname" name="title" placeholder="Enter your username"
                autofocus value="{{$course->title}}" />
            </div>
            <div class="mb-6">
              <label for="desc" class="form-label">Course Description</label>
              <textarea class="form-control" name="description" id="desc">{{$course->description}}</textarea>
              <!-- <input type="text" class="form-control" id="desc" name="description" placeholder="Enter course description" value="{{$course->description}}" /> -->
            </div>
            <button class="btn btn-primary d-grid w-100">Edit</button>
          </form>
        </div>
      </div>
      <!-- Register Card -->
    </div>
  </div>
</div>

@endsection