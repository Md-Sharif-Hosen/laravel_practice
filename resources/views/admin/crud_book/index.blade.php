@extends('admin.layouts.dashboard_layout')
@section('content')
    <div class="page-content">
        <div class="container">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Books</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Crud</a>
                                </li>
                                <li class="breadcrumb-item active">Book</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row justify-content-center">
                <div class="col-6">

                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h2>Books list</h2>
                                        <div class="table-responsive">
                                            <table class="table table-hover table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Book Title</th>
                                                        <th>Book Author</th>
                                                        <th>Book Publication</th>
                                                        <th>Book Image </th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($all_data as $item)
                                                        <tr>
                                                            <td>{{ $item->bookstitle }}</td>



                                                            <td>
                                                                @foreach ($item->crud_authors as $booksauthor)
                                                                    {{ $booksauthor->name }}
                                                                @endforeach
                                                            </td>
                                                            <td>
                                                                @foreach ($item->crud_publications as $bookspublication)
                                                                    {{ $bookspublication->name }}
                                                                @endforeach
                                                            </td>
                                                            <td>
                                                                <img src="/{{ $item->booksimage }}" height="100px"
                                                                    alt="Image">
                                                            </td>
                                                            <td>
                                                                <a href="" class="btn btn-sm btn-info">Show</a>
                                                                <a href="" class="btn btn-sm btn-warning">Edit</a>
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
