@extends('layouts.app')

@section('title', 'Admin Dashboard')
@section('id', 'page-top')

@section('content')
<div id="wrapper">
  @include('roles.admins.sidebar')
  
  <!-- Content Wrapper -->
  <div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

      @include('layouts.header')
      
      <div class="container-fluid">
        <!-- Page Heading -->
        <h2 class="h3 mb-4 text-gray-800">Welcome Admin</h2>
      </div>
    </div>
    <!-- End of Main Content -->

    @include('layouts.footer')
  </div>
</div>

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
@include('layouts.logout-modal')
@endsection
