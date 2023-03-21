@extends('admin.layouts.dashboard_layout')
@section('content')
    <div class="page-content">
        <div class="container">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Crud</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Crud</a>
                                </li>
                                <li class="breadcrumb-item active">list</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row justify-content-center">
                <div class="col-12">

                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                         <h2>Crud store list</h2>
                                        <div class="table-responsive">
                                            <table class="table table-hover table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Title</th>
                                                        <th>Description</th>
                                                        <th>Hobby</th>
                                                        <th> Image </th>
                                                        <th> Role </th>
                                                        <th> Gender </th>
                                                        <th>Action ZDFASdf</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($all_data as $item )
                                                    <tr>
                                                        <td>{{ $item->title }}</td>
                                                        <td>{{ $item->description }}</td>
                                                        <td>
                                                            @if ( $item->crud_hobbies->count())
                                                            <ol>
                                                                @foreach ($item->crud_hobbies as $hobby )
                                                                 <li>{{ $hobby->title }}</li>
                                                                @endforeach
                                                            </ol>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <img src="/{{ $item->image }}" height="100px" alt="Image">
                                                        </td>
                                                        <td>
                                                            ({{ $item->role }})
                                                        </td>
                                                        <td>{{ $item->gender }}</td>
                                                        <td>
                                                            <a href="" class="btn btn-sm btn-info">Show</a>
                                                            <a href="" class="btn btn-sm btn-warning mx-2">Edit</a>
                                                            <a href="" class="btn btn-sm btn-danger">Delete</a>
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
