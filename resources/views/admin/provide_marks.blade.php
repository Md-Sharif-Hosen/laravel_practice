@extends('admin.layouts.dashboard_layout')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Exam attend</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);"> Template</a>
                                </li>
                                <li class="breadcrumb-item active"> Dashboard</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            submit mark
                        </div>
                        <div class="card-body">
                            <ul>
                                <li>user: {{ $user->username }}</li>
                                <li>subject: {{ $exam->title }}</li>
                                <li>mark: {{ $exam_result->marks }}</li>
                            </ul>
                            <form method="POST" action="{{ route('dashboard.provide_marks_submit',$exam_result->id) }}">
                                @csrf
                                <input type="text" value="" name="marks" class="form-control">
                                <button type="submit">submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- container-fluid -->
    </div>

    @push('cjs')
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script>
            $(document).ready(function() {
                $('.exam_list_select').select2();
            });
        </script>
    @endpush
@endsection
