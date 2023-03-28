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
                                                        <th>Subject Name</th>
                                                        <th>Subject Code</th>
                                                        <th>Students Name</th>
                                                        <th>Action</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($examdetails as $item)
                                                        <tr>

                                                            <td>
                                                                {{ $item->Subject_Name }}
                                                            </td>


                                                            <td>
                                                                {{ $item->Subject_Code }}

                                                            </td>
                                                            <td>
                                                                {{-- @if ($item->student)
                                                                    <ol>
                                                                        @foreach ($item->student as $studentlist)
                                                                        <li>{{ $studentlist->Name }}</li>
                                                                        @endforeach
                                                                    </ol>
                                                                @endif --}}
                                                                {{ $item->student_name }}

                                                            </td>
                                                            <td>
                                                                <a href="{{ route('dashboard.examlist.details', $item->id) }}"
                                                                    class="btn btn-sm btn-info">details</a>
                                                                <a href=""
                                                                    class="btn btn-sm btn-warning mx-2">edit</a>
                                                                <a href="{{ route('dashboard.examlist.destory', $item->id) }}"
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
