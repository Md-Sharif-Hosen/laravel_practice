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
                                <h2 class="card_style">Exam Details</h2>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <tr>
                                        <td> Students Name</td>
                                        <td>:</td>
                                        <td>


                                            {{ $examdetails->student->Name }}


                                        </td>
                                    </tr>
                                    <tr>
                                        <td> Subject Name</td>
                                        <td>:</td>
                                        <td>



                                            {{-- @dd($examdetails) --}}
                                            {{ $examdetails->subject->Exam_Name }}
                                            {{-- @endif --}}



                                        </td>
                                    </tr>


                                    <tr>
                                        <td>Subject Code </td>
                                        <td>:</td>
                                        <td>{{ $examdetails->Subject_Code }}</td>
                                    </tr>







                                </table>

                            </div>
                            <div class=" text-center card-footer">
                                <a href="{{ route('dashboard.examlist.index') }}" class="btn btn-outline-info"> <i
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
