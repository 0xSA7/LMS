@extends('layouts.assetsLinks')

@section('content')
<div class="container-xxl">
  <div class="authentication-wrapper authentication-basic container-p-y">
    <div class="authentication-inner">
      <!-- Register Card -->
      <div class="card px-sm-6 px-0">
        <div class="card-body">
          <form id="formAuthentication" method="POST" class="mb-6" action="{{route('admin.student.update', $student->id)}}">
            @csrf
            @method('PUT')
            <input type="text" class="form-control" name="id" value="{{$student->id}}" hidden />
            <div class="mb-6">
              <label for="username" class="form-label">Username</label>
              <input type="text" class="form-control" id="username" name="name" placeholder="Enter your username"
                autofocus value="{{$student->name}}" />
            </div>
            <div class="mb-6">
              <label for="email" class="form-label">Email</label>
              <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email" value="{{$student->email}}" />
            </div>
            <div class="mb-6">
              <label for="phone" class="form-label">Phone</label>
              <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter your phone" value="{{$student->phone}}" />
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