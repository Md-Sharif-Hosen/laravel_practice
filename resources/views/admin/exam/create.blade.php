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


            <div class="row justify-content-center">
                <div class="col-6">

                    <form action="{{ route('dashboard.Exam.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card">
                            <div class="card_header d-flex flex-wrap gap-3 justify-content-between p-4">
                                <h2>Exam Create</h2>
                                <a href="{{ route('dashboard.Exam.index') }}" class="btn btn-outline-info"> <i
                                        class="fa fa-arrow-left">Back</i></a>
                            </div>
                            <div class="card-body">
                                <div class="form_group col-md-6">
                                    <label for="">Student Name</label>
                                    {{-- @dd($studentinfo) --}}
                                    <select class="form-control" name="Student_Name" id="">
                                        @foreach ($studentinfo as $item)
                                            <option value="{{ $item->id }}">{{ $item->Name }}</option>
                                        @endforeach
                                    </select>

                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Department</label>
                                    {{-- @dd($studentinfo) --}}
                                    <select class="form-control" name="Department">
                                        @foreach ($examdepartments as $item)

                                            <option value="{{ $item->id }}">
                                                {{ $item->Department_Name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="from-group col-md-6">
                                    <label for="">Exam Name</label>
                                    <input value="" type="text" name="Exam_Name" class="form-control" />

                                </div>
                                <div class="form_group col-md-6">
                                    <label for="">Course Code</label>
                                    <input type="text" value="" name='Course_Code' class="form-control">

                                </div>




                            </div>
                            <div class="text-center card-footer">
                                <button class="btn btn-outline-info">Submit</button>
                            </div>
                        </div>
                    </form>


                    <!-- end table -->
                </div>
            </div>

        </div> <!-- container-fluid -->
    </div>
@endsection
