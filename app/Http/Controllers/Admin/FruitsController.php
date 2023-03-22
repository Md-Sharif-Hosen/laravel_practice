<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Shop;
use App\Models\Fruits;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FruitsController extends Controller
{
    public function create(){
             return view('admin.fruits.create');
    }

    public function index(){
         $all_data = Fruits::get();
        return view('admin.fruits.index',compact('all_data'));
    }
      public function store(Request $request){
        // dd(request()->all());
        $data = new Fruits();

        $data->fruits_name = request()->fruits_name;
        $data->price = request()->price;
        $data->description = request()->description;

        $data->image = Storage::put('/crudFruits_upload', request()->file('image'));
        $data->save();
        return redirect()->route('dashboard.fruite.index');

   }

   public function edit($id){
      $editdata = Fruits::find($id);
      return view('admin.fruits.edit',compact('editdata'));
   }
   public function details($id){
    // $shops =Shop::get();
    $detailsdata = Fruits::with("shops")-> find($id);
    // $detailsdata =Fruits::with("shops")->where('id',$id)->first();
    return view('admin.fruits.view',compact('detailsdata'));
 }


   public function update(){

    $data = Fruits::find(request()->id);
    // dd($data);
    $data->fruits_name = request()->fruits_name;
    $data->price = request()->price;
    $data->description = request()->description;
    $data->image = Storage::put('/crudFruites_upload',request()->file('image'));
  //   $data->save();
  //   if (request()->has('shop')) {
  //     $data->shop()->sync(request()->shop);
  //  }
    return redirect()->route('dashboard.fruits.index');

  }
}
