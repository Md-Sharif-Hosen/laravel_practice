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

                    <form action="{{ route('dashboard.student.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card">
                            <div class="card_header d-flex flex-wrap gap-3 justify-content-between p-4">
                                <h2>Student Create</h2>
                                <a href="{{ route('dashboard.student.index') }}" class="btn btn-outline-info"> <i
                                        class="fa fa-arrow-left">Back</i></a>
                            </div>
                            <div class="card-body">

                                <div class="from-group col-md-6">
                                    <label for="">Name</label>
                                    <input value="" type="text" name="Name" class="form-control" />
                                    @error('Name')
                                        <div class="text-danger">{{ $Name }}</div>
                                    @enderror
                                </div>
                                <div class="form_group col-md-6">
                                    <label for="">Email</label>
                                    <input type="email" value="" name='Email' class="form-control">
                                    @error('email')
                                        <div class="text-danger">{{ $Email }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="">Department</label>

                                    <select class="form-control" name="Department">

                                        @foreach ($departmentdata as $departments)

                                            <option value="{{ $departments->id }}">
                                                {{ $departments->Department_Name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form_group col-md-6">
                                    <label for="">RegId</label>
                                    <input type="text" value="" name='RegId' class="form-control">
                                    @error('RegId')
                                        <div class="text-danger">{{ $RegId }}</div>
                                    @enderror
                                </div>

                                <div class="form_group col-md-6">
                                    <label for="">Contact Number</label>
                                    <input type="text" value="" name='Contact_Number' class="form-control">
                                    @error('Contact_Number')
                                        <div class="text-danger">{{ $Contact_Number }}</div>
                                    @enderror
                                </div>




                                <div class="from-group col-md-6">
                                    <label for="">Photo</label>
                                    <input value="" type="file" name="Photo" class="form-control" />
                                    @error('Photo')
                                        <div class="text-danger">{{ $Photo }}</div>
                                    @enderror
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
