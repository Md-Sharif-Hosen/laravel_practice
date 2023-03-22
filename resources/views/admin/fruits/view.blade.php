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

                    <form action="">
                        <div class="card">
                            <div class="card_header">
                                <h2 class="card_style">Fruits Details</h2>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <tr>
                                        <td>Fruits name</td>
                                        <td>:</td>
                                        <td>{{$detailsdata->fruits_name}}</td>
                                    </tr>
                                    <tr>
                                        <td>Shop Name</td>
                                        <td>:</td>
                                        <td>
                                            <ol>


                                                @foreach ($detailsdata->shops as $item)
                                                {{-- @dd($crud_model->crud_hobbies->firstwhere('id','=', $item->id)) --}}


                                                 <li> {{ $item->shop_name }}</li>


                                                @endforeach


                                            </ol>

                                        </td>

                                    </tr>
                                    <tr>
                                        <td>Description</td>
                                        <td>:</td>
                                        <td>{{$detailsdata->description}}</td>
                                    </tr>


                                    <tr>
                                        <td>Image</td>
                                        <td>:</td>
                                        <td><img height="100px" width="100px" class="rounded-circle" src="/{{($detailsdata->image)}}" alt=""></td>
                                    </tr>

                                </table>

                                </div>
                                <div class=" text-center card-footer">
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
