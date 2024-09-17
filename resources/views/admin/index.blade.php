@extends('layouts.assetsLinks')
@extends('layouts.main')
{{-- @dd($students) --}}
@section('aside-nav')
@section('table')
    <div class="card">
        <h5 class="d-flex align-items-center justify-content-between card-header">ALL Students <span >Count: {{$studentsCount}}</span></h5>
        <div class="table-responsive text-nowrap">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>img</th>
                        <th>Enrollments</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($students as $student)
                        <tr>
                            <td> <span>{{$student -> id}}</span></td>
                            <td>{{$student -> name}}</td>
                            <td>{{$student -> email}}</td>
                            <td>
                                <ul class="list-unstyled m-0 avatar-group d-flex align-items-center">
                                    <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                        class="avatar avatar-xs pull-up" title="Lilian Fuller">
                                        <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                                    </li>
                                   
                                </ul>
                            </td>
                            <td>
                                
                                    
                                @foreach($student->courses_by_student as $course)
                                      <span class="badge bg-label-primary me-1">{{ $course->title }}</span>
                                @endforeach

                            
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="edit/{{$student->id}}"><i
                                                class="bx bx-edit-alt me-1"></i>
                                            Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i>
                                            Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach



                </tbody>
            </table>
        </div>
    </div>
@endsection

@endsection

<!-- build:js assets/vendor/js/core.js -->
