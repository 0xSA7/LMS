@props(['user'])
@extends('layouts.assetsLinks')
@section('content')
<div class="page-wraper">
  <div id="loading-icon-bx"></div>
  <!-- Content -->
  <div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="page-banner ovbl-dark" style="background-image:url('{{ asset('assets/images/banner/banner1.jpg') }}">
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
                  <h4>{{ $instructor->name }}</h4>
                  <span>{{ $instructor->email }}</span>
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
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#add-course"><i class="ti-pencil-alt"></i>
                        Add Course</a>
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
                        <ul id="masonry" class="ttr-gallery-listing magnific-image list-unstyled row">
                          @foreach ($courses as $course)
                <li class="action-card col-xl-4 col-lg-6 col-md-12 col-sm-6 publish">
                <div class="cours-bx">
                  <div class="action-box">
                  <img src="{{ asset('assets/images/courses/pic1.jpg') }}" alt="">
                  <a href="{{ route('instructor.course.edit', $course->id) }}" class="btn">Edit Now</a>
                  </div>
                  <div class="info-bx text-center">
                  <h5><a
                    href="{{ route('instructor.course.edit', $course->id) }}">{{ $course->title }}</a>
                  </h5>
                  <span>{{$course->category}}</span>
                  </div>
                  <div class="cours-more-info d-flex justify-content-center align-items-center">
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
                    <div class="w-50 align-items-center">
                      <form action="{{route('instructor.course.destory')}}" method="post">
                      @csrf
                      @method('delete')
                      <input type="text" name="id" value="{{$course->id}}" hidden>
                      <button class="m-auto w-100 btn btn-danger py-4 rounded-0" role="submit">Delete</button>
                      </form>
                    </div>
                  </div>
                </div>
                </li>
              @endforeach
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane" id="edit-profile">
                    <div class="profile-head">
                      <h3>Edit Profile</h3>
                    </div>
                    <form action="{{route('updateProfile')}}" method="POST" class="edit-profile">
                      @csrf
                      @method('put')
                      <div>
                        <div class="form-group row">
                          <label class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label">Full
                            Name</label>
                          <div class="col-12 col-sm-9 col-md-9 col-lg-7">
                            <input class="form-control" name="name" type="text" value="{{$instructor->name}}">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label">Phone
                            No.</label>
                          <div class="col-12 col-sm-9 col-md-9 col-lg-7">
                            <input class="form-control" name="phone" type="text" value="{{$instructor->phone}}">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-12 col-sm-3 col-md-3 col-lg-2 col-form-label">Email
                          </label>
                          <div class="col-12 col-sm-9 col-md-9 col-lg-7">
                            <input class="form-control" name="email" value="{{$instructor->email}}" type="text">
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
                      </div>
                    </form>
                  </div>
                  <div class="tab-pane" id="add-course">
                    <div class="authentication-wrapper authentication-basic container-p-y">
                      <div class="authentication-inner">
                        <!-- Register Card -->
                        <div class="card px-sm-6 px-0">
                          <div class="card-body">
                            <form id="formAuthentication" class="mb-6" method="post"
                              action="{{route('instructor.course.store')}}">
                              @csrf
                              <div class="mb-6">
                                <label for="crsname" class="form-label">Course Name</label>
                                <input type="text" class="form-control" id="crsname" name="title"
                                  placeholder="Enter your course name" autofocus />
                              </div>
                              <div class="mb-6">
                                <label for="desc" class="form-label">Course Description</label>
                                <textarea class="form-control" name="description" id="desc"
                                  placeholder="Enter your course description..."></textarea>
                                <!-- <input type="text" class="form-control" id="email" name="email"
                                  placeholder="Enter your email" /> -->
                              </div>
                              <button class="btn btn-primary d-grid w-100" role="submit">Add</button>
                            </form>
                          </div>
                        </div>
                        <!-- Register Card -->
                      </div>
                    </div>
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