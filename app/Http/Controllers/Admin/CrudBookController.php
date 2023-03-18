<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CrudAuthor;
use App\Models\CrudBook;
use App\Models\CrudPublication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CrudBookController extends Controller
{
    //
    public function index()
    {
        //function_body
        $all_data = CrudBook::get();
        // dd($all_data);
        return view('admin.crud_book.index', ['all_data' => $all_data]);
    }
    public function create()
    {
        //function_body
        $crud_author = CrudAuthor::get();
        $crud_publication = CrudPublication::get();

        return view('admin.crud_book.create', ['crud_author' => $crud_author, 'crud_publication' => $crud_publication]);
    }
    public function store(Request $request)

    {
        $crud_book = new CrudBook();
        $crud_book->bookstitle = request()->bookstitle;
        // $crud_book->bookspublication =request()->bookspublication;
        $crud_book->save();
        $crud_book->crud_authors()->attach(request()->booksauthor);
        $crud_book->crud_publications()->attach(request()->bookspublication);

        $crud_book->booksimage = Storage::put('/crud_uploads', request()->file('booksimage'));
        $crud_book->slug = rand(100000, 999999) . $crud_book->id . "" . rand(100, 999);
        $crud_book->save();
        // dd($all_data);
        return redirect()->route('dashboard.crud_book.index');
        // dd(request()->all(),$crud);
    }



    // public function update()

    // {
    //     $crud_book = CrudBook::find(request()->id);
    //     $crud_book->bookstitle = request()->bookstitle;
    //     // $crud_book->bookspublication =request()->bookspublication;
    //     $crud_book->save();

    //     $crud_book->crud_authors()->sync(request()->booksauthor);
    //     $crud_book->crud_publications()->sync(request()->bookspublication);
    //     $crud_book->booksimage = Storage::put('/crud_uploads', request()->file('booksimage'));

    //     $crud_book->save();
    //     // dd($all_data);
    //     return redirect()->route('dashboard.crud_book.create');
    //     // dd(request()->all(),$crud);
    // }

    public function edit($id)
    {
        //function_body
        $crud_author = CrudAuthor::get();
        $crud_publication = CrudPublication::get();
        $crud_book =CrudBook::where($id);

        return view('admin.crud_book.index', ['crud_author' => $crud_author, 'crud_publication' => $crud_publication , 'crud_book'=>$crud_book]);
    }
}
