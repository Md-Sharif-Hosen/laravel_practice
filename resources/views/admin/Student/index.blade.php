@extends('admin.layouts.dashboard_layout')
@section('content')
    <div class="page-content">
        <div class="container">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Crud Student Information</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">common</a>
                                </li>
                                <li class="breadcrumb-item active">Create Student Information</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row justify-content-center">
                <div class="col-12 ">


                    <div class="container">
                        <div class="row">
                            <div class="">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Department</th>
                                                        <th>RegId</th>
                                                        <th>Contact_Number</th>
                                                        <th>Photo</th>
                                                        <th>Action</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($student_data as $item)
                                                        <tr>
                                                            <td>{{ $item->Name }}</td>

                                                            <td>{{ $item->Email }}</td>
                                                            <td>{{$item->department->Department_Name}}</td>
                                                            {{-- $item->departments ? $item->departments->Department_Name : "" --}}
                                                             <td>{{ $item->RegId }}</td>
                                                             <td>{{ $item->Contact_Number }}</td>

                                                            <td>
                                                                <img src="/{{ $item->Photo }}" height="100px"
                                                                    width="100px" alt="">

                                                            </td>

                                                            <td>
                                                                <a href="{{ route('dashboard.student.details', $item->id) }}"
                                                                    class="btn btn-sm btn-info">details</a>
                                                                <a href="{{ route('dashboard.student.edit', $item->id) }}"
                                                                    class="btn btn-sm btn-warning mx-2">edit</a>
                                                                <a href="{{ route('dashboard.student.destroy', $item->id) }}"
                                                                    class="btn btn-sm btn-danger">delete</a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- end table -->
                </div>
            </div>

        </div> <!-- container-fluid -->
    </div>
@endsection
