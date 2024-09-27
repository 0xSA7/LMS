@extends('layouts.assetsLinks')

@section('content')
<div class="page-wraper">
  <div id="loading-icon-bx"></div>

  <!-- Content -->
  <div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="page-banner ovbl-dark" style="background-image:url({{ asset('assets/images/banner/banner2.jpg') }});">
      <div class="container">
        <div class="page-banner-entry">
          <h1 class="text-white">Courses Details</h1>
        </div>
      </div>
    </div>
    <!-- Breadcrumb row -->
    <div class="breadcrumb-row">
      <div class="container">
        <ul class="list-inline">
          <li><a href="/">Home</a></li>
          <li>Courses Details</li>
        </ul>
      </div>
    </div>
    <!-- Breadcrumb row END -->
    <!-- inner page banner END -->
    <div class="content-block">
      <!-- About Us -->
      <div class="section-area section-sp1">
        <div class="container">
          <div class="row d-flex flex-row-reverse">
            <div class="col-lg-3 col-md-4 col-sm-12 m-b30">
              <div class="course-detail-bx">
                <div class="course-buy-now text-center">
                  <!-- must be edited -->
                  @auth
                    @if ($isEnrollment)
                    <form action="{{route('courseUnEnroll', $course->id)}}" method="POST">
                      @csrf
                      @method('delete')
                      <button type="submit" class="btn radius-xl text-uppercase">UnEnroll</button>
                    </form>
                    @else
                    <form action="{{route('courseEnroll', $course->id)}}" method="POST">
                      @csrf
                      <button type="submit" class="btn radius-xl text-uppercase">Enroll</button>
                    </form>
                    @endif
                  @endauth
                  @guest
                  <a href="/login" class="btn radius-xl text-uppercase">Enroll</a>
                  @endguest
                </div>
                <div class="teacher-bx">
                  <div class="teacher-info">
                    <div class="teacher-thumb">
                      <img src="{{ asset('assets/images/testimonials/pic1.jpg') }}" alt="" />
                    </div>
                    <div class="teacher-name">
                      <h5>{{$courseInstructor->name}}</h5>
                      <span>{{$course->category}} Teacher</span>
                    </div>
                  </div>
                </div>
                <div class="pt-4 text-center">
                  <small class="d-block">Category: </small>
                  <span class="text-capitalize text-black">{{$course->category}}</span>
                </div>
              </div>
            </div>
            <div class="col-lg-9 col-md-8 col-sm-12">
              <div class="ttr-post-media media-effect my-5">
                <a href="#"><img src="{{ asset('assets/images/blog/default/thum1.jpg') }}" alt=""></a>
              </div>
              <div class="courses-post mb-5">
                <div class="ttr-post-info">
                  <div class="ttr-post-title">
                    <h2 class="post-title">{{$course->title}}</h2>
                  </div>
                </div>
              </div>
              <div class="courese-overview" id="overview">
                <div class="row">
                  <div class="col-md-12 col-lg-4">
                    <h4>Overview</h4>
                    <ul class="course-features">
                      <li>
                        <i class="ti-time"></i>
                        <span class="label">Duration</span>
                        <span class="value">60 hours</span>
                      </li>
                      <li>
                        <i class="ti-stats-up"></i>
                        <span class="label">Skill level</span>
                        <span class="value">Beginner</span>
                      </li>
                      <li>
                        <i class="ti-smallcap"></i>
                        <span class="label">Language</span>
                        <span class="value">English</span>
                      </li>
                      <li>
                        <i class="ti-user"></i>
                        <span class="label">Students</span>
                        <span class="value">{{$students_in_course}}</span>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-12 col-lg-8">
                    <h5 class="m-b5">Course Description</h5>
                    <p>{{$course->description}}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- contact area END -->
  </div>
  <!-- Content END-->
  <button class="back-to-top fa fa-chevron-up"></button>
</div>
@endsection