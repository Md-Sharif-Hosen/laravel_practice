<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $student_data = Student::get();
        $departmentdata = Department::get();
        return view('admin.student.index', compact('departmentdata', 'student_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $departmentdata = Department::get();
        return view('admin.student.create', compact('departmentdata'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $student_data = new Student();
        $student_data->Name = request()->Name;
        $student_data->Email = request()->Email;
        $student_data->Department = request()->Department;
        $student_data->RegId = request()->RegId;
        $student_data->Contact_Number = request()->Contact_Number;
        $student_data->Photo = Storage::put('/student_photo', request()->file('Photo'));
        $student_data->save();

        return redirect()->route('dashboard.student.index');
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
        $departmentdetails=Department::get();
        $studentdetails=Student::find($id);
        return view('admin.student.view',compact('studentdetails','departmentdetails'));
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
        $editdepartment = Department::get();
        $studentedit = Student::find($id);
        return view('admin.student.edit', compact('studentedit', 'editdepartment'));
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
        $studentedit = Student::find($id);
        $studentedit->Name = request()->Name;
        $studentedit->Email = request()->Email;
        $studentedit->Department = request()->Department;
        $studentedit->RegId = request()->RegId;
        $studentedit->Contact_Number = request()->Contact_Number;
        if (request()->file('Photo')) {

            $studentedit->Photo = Storage::put('/student_photo', request()->file('Photo'));
        }
        $studentedit->save();
        return redirect()->route('dashboard.student.index');
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
        Student::where('id',$id)->delete();
        return redirect()->back();

    }
}
