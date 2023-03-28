<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Exam;
use App\Models\ExamList;
use App\Models\Student;
use Illuminate\Http\Request;

class ExamListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $student=Student::get();
        $examdetails = ExamList::get();
        // dd($examdetails);
        return view('admin.examlist.index', compact('examdetails','student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $students=Student::get();
        $examsubject = Exam::get();
        return view('admin.examlist.create', compact('examsubject','students'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // dd(request()->all());
        foreach (request()->Student_Names as  $item) {
            # code...
            $examliststore = new ExamList();
            $examliststore->Subject_Name = request()->Subject_Name;
            $examliststore->Subject_Code = request()->Subject_Code;
            $examliststore->student_name =$item;
            $examliststore->save();
        }

        return redirect()->route('dashboard.examlist.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function details($id)
    {
        //

        $examdetails = Exam::find($id);

        // dd($examdetails);
        return view('admin.examlist.view', compact('examdetails'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destory($id)
    {
        //
        // dd($id);
        Exam::where('id', $id)->delete();

        return redirect()->back();
    }
}
