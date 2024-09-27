@extends('layouts.assetsLinks')
@section('content')
<div id="loading-icon-bx"></div>
<div class="page-content bg-white">
  <!-- inner page banner -->
  <div class="page-banner ovbl-dark" style="background-image:url({{asset('assets/images/banner/banner3.jpg')}});">
    <div class="container">
      <div class="page-banner-entry">
        <h1 class="text-white">Our Courses</h1>
      </div>
    </div>
  </div>
  <!-- Breadcrumb row -->
  <div class="breadcrumb-row">
    <div class="container">
      <ul class="list-inline">
        <li><a href="/">Home</a></li>
        <li>Our Courses</li>
      </ul>
    </div>
  </div>
  <!-- Breadcrumb row END -->
  <!-- inner page banner END -->
  <div class="content-block">
    <!-- About Us -->
    <div class="section-area section-sp1">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-4 col-sm-12 m-b30">
            <div class="widget courses-search-bx placeani">
              <div class="form-group">
                <div class="input-group">
                  <label>Search Courses</label>
                  <input name="dzName" type="text" required class="form-control">
                </div>
              </div>
            </div>
            <div class="widget widget_archive">
              <h5 class="widget-title style-1">All Courses</h5>
              <ul>
                <li class="active"><a href="#">all</a></li>
                @foreach ($categories as $category)
                <li><a href="#">{{$category}}</a></li>
                @endforeach
              </ul>
            </div>
            <div class="widget">
              <a href="#"><img src="{{asset('assets/images/adv/adv.jpg')}}" alt="" /></a>
            </div>
          </div>
          <div class="col-lg-9 col-md-8 col-sm-12">
            <div class="row">
              <!-- must be edited -->
              @foreach ($courses as $course)
                <div class="col-md-6 col-lg-4 col-sm-6 m-b30">
                  <div class="cours-bx">
                    <div class="action-box">
                    <img src="{{asset('assets/images/courses/pic1.jpg')}}" alt="">
                    <a href="{{route('courses.courseDetails', $course->id)}}" class="btn">Read More</a>
                    </div>
                    <div class="info-bx text-center">
                      <h5 class="overflow-hidden h-25" style="height: 20px">
                        <a href="{{route('courses.courseDetails', $course->id)}}">{{$course->title}}</a>
                      </h5>
                      <span>{{$course->category}}</span>
                    </div>
                  </div>
                </div>
              @endforeach
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
@endsection