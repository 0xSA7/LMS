@extends('layouts.app')

@section('title', 'Owner Dashboard')
@section('id', 'page-top')

@section('content')
<div id="wrapper">
  @include('roles.owners.sidebar')
  
  <!-- Content Wrapper -->
  <div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

      <!-- Topbar -->
      @include('layouts.header')
      <!-- End of Topbar -->
      
      <div class="container-fluid">
        <!-- Page Heading -->
        <h2 class="h3 mb-2 text-gray-800">Admins Table</h2>
        <p class="mb-4">Here you can take action on admins</p>

        <!-- DataTales Admins -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Admins</h6>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Score</th>
                    <th>Tasks</th>
                    <th>Total Active Hours</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Score</th>
                    <th>Tasks</th>
                    <th>Total Active Hours</th>
                    <th>Actions</th>
                  </tr>
                </tfoot>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>79</td>
                    <td>Accepting Courses</td>
                    <td>88</td>
                    <td>
                      <a href="#" class="btn btn-sm btn-outline-success">Edit</a>
                      <a href="#" class="btn btn-sm btn-outline-primary">Show</a>
                      <a href="#" class="btn btn-sm btn-outline-danger">Delete</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
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
