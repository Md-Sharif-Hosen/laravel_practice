<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>

<body>
    @if (request()->has('edit_form'))

        <form action="{{ route('crud-update') }}" method="Post" enctype="multipart/form-data">
            @csrf
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <h2>Edit Form</h2>
                                <input type="hidden" name="id" value="{{ $crud_model->id }}">
                                <div class="form-group mb-3">
                                    <label for="">title</label>
                                    <input type="text" name="title" value="{{ $crud_model->title }}" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Description</label>
                                    <input type="text" name="description" value="{{ $crud_model->description }}" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Hobby</label>

                                    @foreach ($crud_hobbies as $item)
                                    {{-- @dd($crud_model->crud_hobbies->firstwhere('id','=', $item->id)) --}}
                                        <label for="Travelling {{ $item->id }}">
                                            <input type="checkbox"  fid="Travelling {{ $item->id }}"
                                                value="{{ $item->id }}" name="hobby[]">
                                            {{ $item->title }}
                                        </label>
                                    @endforeach

                                </div>
                                <div class="form-group mb-3">
                                    <label for="Gender">
                                        Gender
                                    </label>
                                    <label for="Female">
                                        <input type="radio" {{ $crud_model->gender =="Female"?'Checked':'' }} id="Female"  value="Female" name="gender">
                                        Female
                                    </label>
                                    <label for="Male">
                                        <input type="radio" {{ $crud_model->gender =="Male"?'Checked':'' }}  id="Male" value="Male" name="gender">
                                        Male
                                    </label>
                                    <label for="Others">
                                        <input type="radio" {{ $crud_model->gender == "Others" ?'Checked':'' }}  id="Others" value="Others" name="gender">
                                        Others
                                    </label>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">role</label>
                                    <select class="form-control" name="role">
                                        @foreach ($roles as $role)
                                            <option  {{ $crud_model->role == $role->id ?'selected':'' }}   value="{{ $role->id }}">
                                                {{ $role->title }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">image</label>
                                    <input type="file" accept="image/*" name="image" class="form-control">
                                    <img src="/{{ $crud_model->image }}" height="100px" alt="">
                                </div>



                                <button>Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    @endif
    <br>
    <br>
    <form action="{{ route('crud-insert') }}" method="Post" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <h1>Create Form</h1>
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
                                @foreach ($crud_hobbies as $item)
                                    <label for="Travelling {{ $item->id }}">
                                        <input type="checkbox" id="Travelling {{ $item->id }}"
                                            value="{{ $item->id }}" name="hobby[]">
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
                                    @foreach ($roles as $role)
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
      <br>
      <br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                       <h2>Store List</h2>
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
                                    @foreach ($all_data as $item)
                                        <tr>
                                            <td>{{ $item->title }}</td>
                                            <td>{{ $item->description }}</td>
                                            <td>
                                                @if ($item->crud_hobbies->count())
                                                    <ol>
                                                        @foreach ($item->crud_hobbies as $hobby)
                                                            <li>{{ $hobby->title }}</li>
                                                        @endforeach
                                                    </ol>
                                                @endif
                                            </td>
                                            <td>
                                                <img src="/{{ $item->image }}" height="100px" alt="Image">
                                                @foreach ($item->crud_images as $image )
                                                <br>
                                                <br>
                                                <br>
                                                <img src="/{{$image->path}}" height="100px" alt="Image">

                                                @endforeach
                                            </td>
                                            <td>
                                                {{ $item->user_roles->title }}
                                            </td>
                                            <td>{{ $item->gender }}</td>
                                            <td>
                                                <a href="" class="btn btn-sm btn-info">Show</a>
                                                <a href="/edit/{{$item->id}}?edit_form=true" class="btn btn-sm btn-warning mx-2">Edit</a>
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
</body>

</html>
