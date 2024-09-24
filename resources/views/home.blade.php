@extends('layouts.app')

@section('title', 'LMS')

@section('content')
  @include('layouts.header')
  <main>
    <section class="cards">
      <div class="container">
        <div class="row">
          @yield('home-body')
        </div>
      </div>
    </section>
  </main>
  @include('layouts.footer')
@endsection