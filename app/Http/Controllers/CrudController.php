<?php

namespace App\Http\Controllers;

use App\Models\CrudModel;
use App\Models\UserRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CrudController extends Controller
{
    //
    public function index()
    {
        //function_body
        $roles =UserRole::get();
        $crud_hobbies=\App\models\CrudHobby::get();
        $all_data=CrudModel::with(['crud_hobbies'=>function($q){
            return $q->select('crud_hobbies.id','crud_hobbies.title');
        },
        'user_roles',
        'crud_images'
        ])->paginate(10);
        // dd($all_data);
        return view('crud.index', ['roles'=>$roles,'all_data'=>$all_data,'crud_hobbies'=>$crud_hobbies]);
    }
    public function store()
    {
        //function_body
        $crud= new CrudModel();
        $crud->title =request()->title;
        $crud->description =request()->description;
        $crud->gender =request()->gender;
        $crud->role =request()->role;
        $crud->save();


        // $crud->hobby=json_encode(request()->hobby);
        $crud->crud_hobbies()->attach(request()->hobby);
        $crud->image=Storage::put('/crud upload',request()->file('image'));
        $crud->slug=rand(100000,999999).$crud->id."". rand(100,999);
        $crud->save();


        // dd(request()->all(),$crud);
       return redirect()->back();
    }


    public function edit($id)
    {
        //function_body
        $roles =UserRole::get();
        $crud_hobbies=\App\models\CrudHobby::get();
        $all_data=CrudModel::with(['crud_hobbies'=>function($q){
            return $q->select('crud_hobbies.id','crud_hobbies.title');
        }])->paginate(10);

       $crud_model = CrudModel::with("crud_hobbies")->find($id);
    //    $crud_model = CrudModel::with("crud_hobbies")->where('slug',$id)->first();
        return view('crud.index', ['roles'=>$roles,'all_data'=>$all_data,'crud_hobbies'=>$crud_hobbies , 'crud_model'=>$crud_model]);
    }
      public function update()
    {
        //function_body
        // dd(request()->all());
        $crud=CrudModel::find(request()->id);
        $crud->title =request()->title;
        $crud->description =request()->description;
        $crud->gender =request()->gender;
        $crud->role =request()->role;
        $crud->save();


        // $crud->hobby=json_encode(request()->hobby);
        if (request()->has('hobby')) {
            # code...
            $crud->crud_hobbies()->sync(request()->hobby);
        }
        $crud->image=Storage::put('/crud_upload',request()->file('image'));
        $crud->save();
       return redirect()->route('crud-index');
    }


}
