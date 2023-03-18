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
                <div class="col-6">
                    <form action="{{ route('dashboard.crud_book.store') }}" method="Post" enctype="multipart/form-data">
                        @csrf
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="card">
                                        <div class="card-body">
                                            <h2> Book Information Create</h2>
                                            <div class="form-group mb-3">
                                              <label for="">title</label>
                                              <input type="text" name="bookstitle" class="form-control">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="">BooksAuthor</label>
                                                   <select class="form-control" name="booksauthor[]">
                                                    @foreach ($crud_author as $author )
                                                    <option value="{{ $author->id }}">
                                                    {{ $author->name }}
                                                    </option>

                                                    @endforeach
                                                   </select>
                                                  </div>
                                              </div>
                                            <div class="form-group mb-3">
                                                <label for="">Book Publication Name</label>
                                                <select class="form-control" name="bookspublication" id="">
                                                    @foreach ($crud_publication as $publication )
                                                        <option value="{{ $publication->id }}">
                                                        {{ $publication->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                              </div>



                                              <div class="form-group mb-3">
                                                <label for="">image</label>
                                                <input type="file" accept="image/*" name="booksimage" class="form-control">
                                              </div>



                                              <button>Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>



                    <!-- end table -->
                </div>
            </div>

        </div> <!-- container-fluid -->
    </div>
@endsection
