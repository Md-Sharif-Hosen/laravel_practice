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
                    <form action="{{ route('dashboard.fruite.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card">
                            <div class="card_header d-flex flex-wrap gap-3 justify-content-between p-4">
                                <h2>Fruites Create</h2>
                                <a href="" class="btn btn-outline-info"> <i
                                        class="fa fa-arrow-left">Back</i></a>
                            </div>
                            <div class="card-body">

                                <div class="from-group col-md-6">
                                    <label for="">Fruites Name</label>
                                    <input value="" type="text" name="fruits_name" class="form-control" />
                                    @error('name')
                                        <div class="text-danger">{{ $fruits_name }}</div>
                                    @enderror
                                </div>

                                <div class="from-group col-md-6">
                                    <label for="">price</label>
                                    <input value="" type="text" name="price" class="form-control" />
                                    @error('price')
                                        <div class="text-danger">{{ $price }}</div>
                                    @enderror
                                </div>
                                <div class="from-group col-md-6">
                                    <label for="">Description</label>
                                    <input value="" type="text" name="description" class="form-control" />
                                    @error('description')
                                        <div class="text-danger">{{ $description }}</div>
                                    @enderror
                                </div>
                                <div class="from-group col-md-6">
                                    <label for="">Image</label>
                                    <input value="" type="file" name="image" class="form-control" />
                                    @error('image')
                                        <div class="text-danger">{{ $image }}</div>
                                    @enderror
                                </div>


                            </div>
                            <div class="text-center card-footer">
                                <button class="btn btn-outline-info">submit</button>
                            </div>
                        </div>
                    </form>



                    <!-- end table -->
                </div>
            </div>

        </div> <!-- container-fluid -->
    </div>
@endsection
