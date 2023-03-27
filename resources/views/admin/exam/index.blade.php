@extends('admin.layouts.dashboard_layout')
@section('content')
    <div class="page-content">
        <div class="container">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Crud Book Information</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">common</a>
                                </li>
                                <li class="breadcrumb-item active">Create Book Information</li>
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
                                                        <th>Student Name</th>
                                                        <th>Department</th>
                                                        <th>Exam Name</th>
                                                        <th>Course Code</th>
                                                        <th>Action</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($examinfo as $item)
                                                        <tr>
                                                            {{-- @dd($item->students)
                                                            <td>
                                                                {{ $item->students->Name }}
                                                            </td> --}}
                                                            <td>
                                                                @if ($item->students)
                                                                    <ol>
                                                                        @foreach ($item->students as $name)
                                                                            <li>{{ $name->Name }}</li>
                                                                        @endforeach
                                                                    </ol>
                                                                @endif
                                                            </td>

{{--
                                                            <td>

                                                                @if ($item->departments)
                                                                    <ol>
                                                                        @foreach ($item->departments as $find)
                                                                            <li>{{ $find-> }}</li>
                                                                        @endforeach
                                                                    </ol>
                                                                @endif
                                                            </td> --}}
                                                            {{-- @dd($item->Department) --}}
                                                            <td>{{ $item->department->Department_Name}}</td>

                                                            <td>{{ $item->Exam_Name }}</td>


                                                            <td>{{ $item->Course_Code }}</td>
                                                            <td>
                                                                <a href="{{ route('dashboard.Exam.details', $item->id) }}"
                                                                    class="btn btn-sm btn-info">details</a>
                                                                <a href="{{ route('dashboard.Exam.edit', $item->id) }}"
                                                                    class="btn btn-sm btn-warning mx-2">edit</a>
                                                                <a href="{{ route('dashboard.Exam.destroy', $item->id) }}"
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
