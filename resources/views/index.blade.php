@extends('layouts.assetsLinks')

@section('content')
<div id="loading-icon-bx"></div>

<!-- Content -->
<div class="page-content bg-white">
  @include('layouts.slider')
  <!-- Main Slider -->
  <div class="content-block">
    <!-- Our Services -->
    <div class="section-area content-inner service-info-bx">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="service-bx">
              <div class="action-box">
                <img src="{{asset('assets/images/our-services/pic1.jpg')}}" alt="">
              </div>
              <div class="info-bx text-center">
                <div class="feature-box-sm radius bg-white">
                  <i class="fa fa-bank text-primary"></i>
                </div>
                <h4><a href="javascript:;">Best Industry Leaders</a></h4>
                <a href="javascript:;" class="btn radius-xl disabled">Coming Soon...</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="service-bx">
              <div class="action-box">
                <img src="{{asset('assets/images/our-services/pic2.jpg')}}" alt="">
              </div>
              <div class="info-bx text-center">
                <div class="feature-box-sm radius bg-white">
                  <i class="fa fa-book text-primary"></i>
                </div>
                <h4><a href="/courses">Learn Courses Online</a></h4>
                <a href="/courses" class="btn radius-xl">View More</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="service-bx m-b0">
              <div class="action-box">
                <img src="{{asset('assets/images/our-services/pic3.jpg')}}" alt="">
              </div>
              <div class="info-bx text-center">
                <div class="feature-box-sm radius bg-white">
                  <i class="fa fa-file-text-o text-primary"></i>
                </div>
                <h4><a href="javascript:;">Book Library & Store</a></h4>
                <a href="javascript:;" class="btn radius-xl disabled">Coming Soon...</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Our Services END -->

    <!-- Popular Courses -->
    <div class="section-area section-sp2 popular-courses-bx">
      <div class="container">
        <div class="row">
          <div class="col-md-12 heading-bx left">
            <h2 class="title-head">Popular <span>Courses</span></h2>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page</p>
          </div>
        </div>
        <div class="row">
          <div class="courses-carousel owl-carousel owl-btn-1 col-12 p-lr0">
            @foreach ($courses as $course)
            <div class="item">
              <div class="cours-bx">
                <div class="action-box">
                  <img src="{{asset('assets/images/courses/pic1.jpg')}}" alt="">
                  <a href="{{route('courses.courseDetails', $course->id)}}" class="btn">Read More</a>
                </div>
                <div class="info-bx text-center">
                  <h5><a href="{{route('courses.courseDetails', $course->id)}}">{{$course->title}}</a></h5>
                  <span>{{$course->category}}</span>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
    <!-- Popular Courses END -->

    <!-- Form -->
    <div class="section-area section-sp1 ovpr-dark bg-fix online-cours"
      style="background-image:url({{asset('assets/images/background/bg1.jpg')}});">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center text-white">
            <h2>Online Courses To Learn</h2>
            <h5>Own Your Feature Learning New Skills Online</h5>
            <form class="cours-search">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="What do you want to learn today?	">
                <div class="input-group-append">
                  <button class="btn" type="submit">Search</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="mw800 m-auto">
          <div class="row">
            <div class="col-md-4 col-sm-6">
              <div class="cours-search-bx m-b30">
                <div class="icon-box">
                  <h3><i class="ti-user"></i><span class="counter">5</span>M</h3>
                </div>
                <span class="cours-search-text">Over 5 million student</span>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="cours-search-bx m-b30">
                <div class="icon-box">
                  <h3><i class="ti-book"></i><span class="counter">30</span>K</h3>
                </div>
                <span class="cours-search-text">30,000 Courses.</span>
              </div>
            </div>
            <div class="col-md-4 col-sm-12">
              <div class="cours-search-bx m-b30">
                <div class="icon-box">
                  <h3><i class="ti-layout-list-post"></i><span class="counter">20</span>K</h3>
                </div>
                <span class="cours-search-text">Learn Anythink Online.</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Form END -->
  </div>
</div>
<!-- Content END-->

<button class="back-to-top fa fa-chevron-up"></button>
@endsection