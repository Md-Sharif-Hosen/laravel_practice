<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Exam;
use App\Models\Student;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $examinfo= Exam::with('students','department')->get();

        return view('admin.exam.index',compact('examinfo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $examdepartments=Department::get();
        $studentinfo = Student::get();
        return view('admin.exam.create',compact('studentinfo','examdepartments'));
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
        $examinfo= new Exam();
        $examinfo->Exam_Name=request()->Exam_Name;
        $examinfo->Department = request()->Department;
        $examinfo->Student_Name=request()->Student_Name;
        $examinfo->Course_Code=request()->Course_Code;
        $examinfo->save();
         return redirect()->route('dashboard.Exam.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function details($id)
    {
        $examdetails=Exam::find($id);
        return view('admin.exam.view',compact('examdetails'));
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
        $examstudent=Student::get();
        $examdepartment=Department::get();
        $examupdate=Exam::find($id);
        return view('admin.exam.edit',compact('examupdate','examdepartment','examstudent'));
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
        $examupdate=Exam::find($id);
        $examupdate->Student_Name=request()->Student_Name;
        $examupdate->Department=request()->Department;
        $examupdate->Exam_Name=request()->Exam_Name;
        $examupdate->Course_Code=request()->Course_Code;
        $examupdate->save();
        return redirect()->route('dashboard.Exam.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Exam::where('id',$id)->delete();
        return redirect()->back();
    }
}
