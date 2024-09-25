@props(['user']);
@extends('layouts.assetsLinks')
@section('content')
<div class="page-wraper">
  <div id="loading-icon-bx"></div>
  <!-- Content -->
  <div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="page-banner ovbl-dark" style="background-image:url('{{ asset('assets/images/banner/banner1.jpg') }}');">
      <div class="container">
        <div class="page-banner-entry">
          <h1 class="text-white">Profile</h1>
        </div>
      </div>
    </div>
    <!-- Breadcrumb row -->
    <div class="breadcrumb-row">
      <div class="container">
        <ul class="list-inline">
          <li><a href="#">Home</a></li>
          <li>Profile</li>
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
              <div class="profile-bx text-center">
                <div class="user-profile-thumb">
                  <img src="{{ asset('assets/images/profile/pic1.jpg') }}" alt="" />
                </div>
                <div class="profile-info">
                  <h4>{{ $user->name }}</h4>
                  <span>{{ $user->email }}</span>
                </div>
                <div class="profile-social">
                  <ul class="list-inline m-a0">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  </ul>
                </div>
                <div class="profile-tabnav">
                  <ul class="nav nav-tabs">
                    <li class="nav-item">
                      <a class="nav-link active" data-toggle="tab" href="#courses"><i class="ti-book"></i>Courses</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#edit-profile"><i class="ti-pencil-alt"></i>Edit
                        Profile</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-9 col-md-8 col-sm-12 m-b30">
              <div class="profile-content-bx">
                <div class="tab-content">
                  <div class="tab-pane active" id="courses">
                    <div class="profile-head">
                      <h3>My Courses</h3>
                      <div class="feature-filters style1 ml-auto">
                        <ul class="filters" data-toggle="buttons">
                          <li data-filter="" class="btn active">
                            <input type="radio">
                            <a href="#"><span>All</span></a>
                          </li>
                          <li data-filter="publish" class="btn">
                            <input type="radio">
                            <a href="#"><span>Publish</span></a>
                          </li>
                          <li data-filter="pending" class="btn">
                            <input type="radio">
                            <a href="#"><span>Pending</span></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="courses-filter">
                      <div class="clearfix">
                        <ul id="masonry" class="ttr-gallery-listing magnific-image row">
                          @foreach ($student_courses as $course)
                          <li class="action-card col-xl-4 col-lg-6 col-md-12 col-sm-6 publish">
                            <div class="cours-bx">
                              <div class="action-box">
                              <img src="{{ asset('assets/images/courses/pic1.jpg') }}" alt="">
                              <a href="{{ route('courses.courseDetails', $course->id) }}" class="btn">Read More</a>
                              </div>
                              <div class="info-bx text-center">
                              <h5><a href="{{ route('courses.courseDetails', $course->id) }}">{{ $course->title }}</a>
                              </h5>
                              <span>Programming</span>
                              </div>
                              <div class="cours-more-info">
                              <div class="review">
                                <span>3 Review</span>
                                <ul class="cours-star">
                                <li class="active"><i class="fa fa-star"></i></li>
                                <li class="active"><i class="fa fa-star"></i></li>
                                <li class="active"><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                </ul>
                              </div>
                              </div>
                            </div>
                          </li>
                          @endforeach
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane" id="quiz-results">
                    <div class="profile-head">
                      <h3>Quiz Results</h3>
                    </div>
                    <div class="courses-filter">
                      <div class="row">
                        <div class="col-md-6 col-lg-6">
                          <ul class="course-features">
                            <li><i class="ti-book"></i> <span class="label">Lectures</span> <span class="value">8</span>
                            </li>
                            <li><i class="ti-help-alt"></i> <span class="label">Quizzes</span> <span
                                class="value">1</span></li>
                            <li><i class="ti-time"></i> <span class="label">Duration</span> <span class="value">60
                                hours</span></li>
                            <li><i class="ti-stats-up"></i> <span class="label">Skill
                                level</span> <span class="value">Beginner</span>
                            </li>
                            <li><i class="ti-smallcap"></i> <span class="label">Language</span> <span
                                class="value">English</span></li>
                            <li><i class="ti-user"></i> <span class="label">Students</span> <span
                                class="value">32</span></li>
                            <li><i class="ti-check-box"></i> <span class="label">Assessments</span> <span
                                class="value">Yes</span></li>
                          </ul>
                        </div>
                        <div class="col-md-6 col-lg-6">
                          <ul class="course-features">
                            <li><i class="ti-book"></i> <span class="label">Lectures</span> <span class="value">8</span>
                            </li>
                            <li><i class="ti-help-alt"></i> <span class="label">Quizzes</span> <span
                                class="value">1</span></li>
                            <li><i class="ti-time"></i> <span class="label">Duration</span> <span class="value">60
                                hours</span></li>
                            <li><i class="ti-stats-up"></i> <span class="label">Skill
                                level</span> <span class="value">Beginner</span>
                            </li>
                            <li><i class="ti-smallcap"></i> <span class="label">Language</span> <span
                                class="value">English</span></li>
                            <li><i class="ti-user"></i> <span class="label">Students</span> <span
                                class="value">32</span></li>
                            <li><i class="ti-check-box"></i> <span class="label">Assessments</span> <span
                                class="value">Yes</span></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane" id="edit-profile">
                    <div class="profile-head">
                      <h3>Edit Profile</h3>
                    </div>
                    <form action="/profile" method="POST" class="edit-profile">
                      @csrf
                      {{-- @method('put') --}}
                      <div>
                        <div class="form-group row">
                          <div class="col-12 col-sm-9 col-md-9 col-lg-10 ml-auto">
                            <h3>1. Personal Details</h3>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label">Full
                            Name</label>
                          <div class="col-12 col-sm-9 col-md-9 col-lg-7">
                            <input class="form-control" name="name" type="text" value="{{$user->name}}">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label">Phone
                            No.</label>
                          <div class="col-12 col-sm-9 col-md-9 col-lg-7">
                            <input class="form-control" name="phone" type="text" value="{{$user->phone}}">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label">Email
                          </label>
                          <div class="col-12 col-sm-9 col-md-9 col-lg-7">
                            <input class="form-control" name="email" value="{{$user->email}}" type="text">
                          </div>
                        </div>
                        <div class="seperator"></div>
                        <div>
                          <div>
                            <div class="row">
                              <div class="col-12 col-sm-3 col-md-3 col-lg-2"></div>
                              <div class="col-12 col-sm-9 col-md-9 col-lg-7">
                                <button type="submit" class="btn">
                                  Save changes
                                </button>
                                <button type="reset" class="btn-secondry">Cancel</button>
                              </div>
                            </div>
                          </div>
                        </div>
                    </form>
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