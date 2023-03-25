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
                <div class="col-6">

                    <form action="">
                        <div class="card">
                            <div class="card_header">
                                <h2 class="card_style">Student Details</h2>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <tr>
                                        <td> name</td>
                                        <td>:</td>
                                        <td>{{$studentdetails->Name}}</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>:</td>
                                        <td>{{ $studentdetails->Email }}</td>

                                    </tr>



                                    <tr>
                                        <td>Department</td>
                                        <td>:</td>
                                        <td> {{ $studentdetails->department->Department_Name }} </td>
                                    </tr>

                                    <tr>
                                        <td>RegId</td>
                                        <td>:</td>
                                        <td>{{$studentdetails->RegId}}</td>
                                    </tr>
                                    <tr>
                                        <td>Contact Number</td>
                                        <td>:</td>
                                        <td>{{$studentdetails->Contact_Number}}</td>
                                    </tr>



                                    <tr>
                                        <td>Photo</td>
                                        <td>:</td>
                                        <td><img height="100px" width="100px" class="rounded-circle" src="/{{($studentdetails->Photo)}}" alt=""></td>
                                    </tr>



                                </table>

                                </div>
                                <div class=" text-center card-footer">
                                    <a href="{{ route('dashboard.student.index') }}" class="btn btn-outline-info"> <i
                                        class="fa fa-arrow-left">Back</i></a>
                                </div>
                            </div>
                      </form>


                    <!-- end table -->
                </div>
            </div>

        </div> <!-- container-fluid -->
    </div>
@endsection
