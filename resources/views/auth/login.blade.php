@extends('layouts.assetsLinks')

@section('content')
<div class="page-wraper">
  <!-- loader -->
  <div id="loading-icon-bx"></div>
  
  <!-- login form page -->
  <div class="account-form">
    <div class="account-head" style="background-image:url({{ asset('assets/images/background/bg2.jpg') }});">
      <a href="/"><img src="{{ asset('assets/images/logo-white-2.png') }}" alt=""></a>
    </div>
    <div class="account-form-inner">
      <div class="account-container">
        <div class="heading-bx left">
          <h2 class="title-head">Login to your <span>Account</span></h2>
          <p>Don't have an account? <a href="{{route('reg.show')}}">Create one here</a></p>
        </div>
        <form class="contact-bx" method="POST" action="{{route('login.add')}}">
          @csrf
          <div class="row placeani">
            <div class="col-lg-12">
              <x-form-filed class="form-group">
                <x-form-label for="email">Your Email</x-form-label>
                <x-form-input name="email" type="email" id="email" required />
                <x-form-error field="email" />
              </x-form-filed>
            </div>
            <div class="col-lg-12">
              <x-form-filed>
                <x-form-label for="password">Password</x-form-label>
                <x-form-input name="password" id="password" type="password" required />
                <x-form-error field="passowrd" />
              </x-form-filed>
            </div>
            <div class="col-lg-12">
              <div class="form-group form-forget">
                <div class="custom-control custom-checkbox">
                  <x-form-input type="checkbox" id="customControlAutosizing" class="custom-control-input" />
                  <x-form-label for="customControlAutosizing" class="custom-control-label">Remember Me</x-form-label>
                </div>
                <a href="{{route('forgotPass.show')}}" class="ml-auto">Forgot Password?</a>
              </div>
            </div>
            <div class="col-lg-12 m-b30">
              <x-button name="submit" type="submit">Login</x-button>
            </div>
            <div class="col-lg-12">
              <h6>Login with Social media</h6>
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
</div>
@endsection