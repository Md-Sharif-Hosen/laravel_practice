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
                <div class="col-12">

                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>name</th>
                                                        <th>price</th>
                                                        <th>Description</th>
                                                        <th>image</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                 <tbody>
                                                      @foreach ($all_data as $item)

                                                         <tr>

                                                            <td>{{ $item->fruits_name }}</td>
                                                            <td>{{ $item->price }}</td>
                                                            <td>{{ $item->description??'' }}</td>

                                                            <td>
                                                                <img src="/{{ $item->image }}" height="100px" width="100px" alt="">

                                                            </td>
                                                            <td>
                                                                <a href="{{ route('dashboard.fruite.details',$item->id) }}" class="btn btn-sm btn-info">Details</a>
                                                                <a href="{{ route('dashboard.fruite.edit',$item->id) }}" class="btn btn-sm btn-warning mx-2">edit</a>
                                                                <a href="#" class="btn btn-sm btn-danger">delete</a>
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
