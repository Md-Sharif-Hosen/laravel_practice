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


                    <form action="{{ route('dashboard.Exam.update', $examupdate->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card">
                            <div class="card_header d-flex flex-wrap gap-3 justify-content-between p-4">
                                <h2>Exam Information Edit</h2>
                                <a href="{{ route('dashboard.Exam.index') }}" class="btn btn-outline-info"> <i
                                        class="fa fa-arrow-left">Back</i></a>
                            </div>
                            <div class="card-body">

                                <div class="from-group col-md-6">
                                    <label for="">Student Name</label>
                                    <select class="form-control" name="Student_Name" id="">
                                        @foreach ($examstudent as $item)
                                            <option {{ $examupdate->Student_Name == $item->id? 'selected': '' }} value="{{ $item->id }}">
                                            {{ $item->Name }}
                                            </option>
                                        @endforeach
                                    </select>



                                </div>
                                {{--
                                <div class="from-group col-md-6">
                                    <label for="">Department</label>
                                    <input value="{{ $examupdate->Department }}" type="text" name="Department"
                                        class="form-control" />

                                </div> --}}
                                <div class="form-group col-md-6 ">
                                    <label for="Department"></label>
                                    <select class="form-control" name="Department" id="Department">

                                        @foreach ($examdepartment as $item)
                                            <option {{ $examupdate->Department == $item->id ? 'selected' : '' }}
                                                value="{{ $item->id }}">
                                                {{ $item->Department_Name }}
                                            </option>
                                        @endforeach
                                    </select>

                                </div>



                                <div class="form-group col-md-6">
                                    <label for="">Exam Name </label>
                                    <input type="text" class="form-control" name="Exam_Name"
                                        value="{{ $examupdate->Exam_Name }}">

                                </div>
                                <div class="form-group col-md-6">
                                    <label for="Contact_Number">Course Code</label>
                                    <input class="form-control" name="Course_Code" value="{{ $examupdate->Course_Code }}"
                                        type="text">

                                </div>





                                <div class="text-center card-footer">
                                    <button class="btn btn-outline-info">Update</button>
                                </div>
                            </div>
                    </form>

                    <!-- end table -->
                </div>
            </div>

        </div> <!-- container-fluid -->
    </div>
@endsection
