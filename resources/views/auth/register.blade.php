@extends('layouts.assetsLinks')

@section('content')
<div id="loading-icon-bx"></div>
<div class="account-form">
  <div class="account-head" style="background-image:url({{ asset('assets/images/background/bg2.jpg') }});">
    <a href="{{ url('/') }}"><img src="{{ asset('assets/images/logo-white-2.png') }}" alt=""></a>
  </div>
  <div class="account-form-inner">
    <div class="account-container">
      <div class="heading-bx left">
        <h2 class="title-head">Sign Up <span>Now</span></h2>
        <p>Login Your Account <a href="{{ url('/') }}">Click here</a></p>
      </div>
      <form class="contact-bx" method="POST" action="register">
        @csrf
        <div class="row placeani">
          <div class="col-lg-12">
            <div class="form-group">
              <div class="input-group">
                <x-form-label for="name">Name</x-form-label>
                <x-form-input name="name" id="name" type="text" required />
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="form-group">
              <div class="input-group">
                <x-form-label for="email">Email</x-form-label>
                <x-form-input name="email" id="email" type="email" required />
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="form-group">
              <div class="input-group">
                <x-form-label for="password">Password</x-form-label>
                <x-form-input name="password" id="password" type="password" required />
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="form-group">
              <div class="input-group">
                <x-form-label for="password_confirmation">Confirm Password</x-form-label>
                <x-form-input name="password_confirmation" id="password_confirmation" type="password" required />
              </div>
            </div>

          </div>
          <div class="col-lg-12 m-b30">
            <x-button name="submit" type="submit" value="Submit">Sign Up</x-button>
          </div>
          <div class="col-lg-12">
            <h6>Sign Up with Social media</h6>
            <div class="d-flex">
              <a class="btn flex-fill m-r5 facebook" href="#"><i class="fa fa-facebook"></i>Facebook</a>
              <a class="btn flex-fill m-l5 google-plus" href="#"><i class="fa fa-google-plus"></i>Google Plus</a>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection