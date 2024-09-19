@extends('layouts.app')

@section('class', 'bg-gradient-primary')

@section('content')
<div class="container">
  <!-- Outer Row -->
  <div class="row justify-content-center">
    <div class="col-xl-10 col-lg-12 col-md-9">
      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="col-lg-6 d-none d-lg-block bg-form-image" style="background-image:url('{{asset("imgs/img-beside-form.jpg")}}')"></div>
            <div class="col-lg-6">
              @yield('form')
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
