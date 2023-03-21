<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CrudModel;
use App\Models\UserRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SharifController extends Controller
{
    //fn
    public function create()
    {
        //function_body
        $roles =UserRole::get();
        $crud_hobbies=\App\models\CrudHobby::get();

        return view('admin.crud.create', ['roles'=>$roles,'crud_hobbies'=>$crud_hobbies]);
    }

    public function index()
    {
        //function_body
        $all_data=CrudModel::with(['crud_hobbies'=>function($q){
            return $q->select('crud_hobbies.id','crud_hobbies.title');
        }])->paginate(15);
        // dd($all_data);
        return view('admin.crud.index',compact('all_data'));
    }
    public function store(Request $request)

    {
        $crud= new CrudModel();
        $crud->title =request()->title;
        $crud->description =request()->description;
        $crud->gender =request()->gender;
        $crud->role =request()->role;
        $crud->save();


        $crud->hobby=json_encode(request()->hobby);
        $crud->crud_hobbies()->attach(request()->hobby);
        $crud->image=Storage::put('/crud upload',request()->file('image'));
        $crud->slug=rand(100000,999999).$crud->id."". rand(100,999);
        $crud->save();
        // dd(request()->all(),$crud);
        $all_data=CrudModel::with(['crud_hobbies'=>function($q){
            return $q->select('crud_hobbies.id','crud_hobbies.title');
        }])->paginate(15);
         return redirect()->route('dashboard.crud.index');

}



}
