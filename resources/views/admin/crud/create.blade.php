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
                                <li class="breadcrumb-item active">Create</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row justify-content-center">
                <div class="col-6">

                    <form action="{{ route('dashboard.crud.store') }}" method="Post" enctype="multipart/form-data">
                        @csrf
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="card">
                                        <div class="card-body">
                                            <h2>Create</h2>
                                            <div class="form-group mb-3">
                                              <label for="">title</label>
                                              <input type="text" name="title" class="form-control">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="">Description</label>
                                                <input type="text" name="description" class="form-control">
                                              </div>
                                              <div class="form-group mb-3">
                                                <label for="">Hobby</label>
                                                @foreach ($crud_hobbies as $item )

                                                <label for="Travelling {{ $item->id }}">
                                                    <input type="checkbox" id="Travelling {{ $item->id }}" value="{{ $item->id }}" name="hobby[]">
                                                    {{ $item->title }}
                                                </label>
                                                    @endforeach

                                              </div>
                                              <div class="form-group mb-3">
                                                <label for="Gender">
                                                    Gender
                                                </label>
                                                <label for="Female">
                                                    <input type="radio" id="Female" value="Female" name="gender">
                                                    Female
                                                </label>
                                                <label for="Male">
                                                    <input type="radio" id="Male" value="Male" name="gender">
                                                    Male
                                                </label>
                                                <label for="Others">
                                                    <input type="radio" id="Others" value="Others" name="gender">
                                                    Others
                                                </label>
                                              </div>
                                              <div class="form-group mb-3">
                                                <label for="">role</label>
                                               <select class="form-control" name="role">
                                                @foreach ($roles as $role )
                                                <option value="{{ $role->id }}">
                                                {{ $role->title }}
                                                </option>

                                                @endforeach
                                               </select>
                                              </div>
                                              <div class="form-group mb-3">
                                                <label for="">image</label>
                                                <input type="file" accept="image/*" name="image" class="form-control">
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
