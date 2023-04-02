<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Exam;
use App\Models\ExamResult;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardControler extends Controller
{
    public function index()
    {
        $exams = Exam::withCount('exam_results')->get();
        // dd($exams->toArray());
        return view('admin.dashboard', [
            'exams' => $exams,
        ]);
    }

    public function attend_students(Exam $exam)
    {
        $attended_students = $exam->exam_results()->with('user')->get();
        return view('admin.attend_students', compact('exam', 'attended_students'));
        //function_body
    }
    public function provide_marks(ExamResult $exam_result)
    {
        $exam = $exam_result->exam()->first();
        $user = $exam_result->user()->first();
        return view('admin.provide_marks', compact('exam', 'user', 'exam_result'));
        //function_body
    }
    public function provide_marks_submit(ExamResult $exam_result)
    {
        $exam_result->marks = request()->marks;
        $exam_result->save();
        return redirect()->back()->with('success','success');
        dd($exam_result, request()->all());
    }
    public function attend_exam()
    {
        //function_body
        // $exams= Exam::get();
        $user_id = auth()->user()->id;
        
        $exams = Exam::whereExists(function ($query) use ($user_id) {
            return $query->select(DB::raw(1))
                ->from('exam_results')
                ->whereColumn('exam_results.exam_id', 'exams.id')
                ->where('exam_results.user_id', $user_id);
        })
            ->get();

        // $exam_ids = $exams->map(function ($exam) {
        //     return $exam->id;
        // })->all();

        $exam_ids = [];
        foreach ($exams as $key => $value) {
            array_push($exam_ids, $value->id);
        }

        $exams = Exam::whereNotIn('id', $exam_ids)->get();

        // dd($exams->toArray(), $exam_ids);
        return view('admin.attend_exam', compact('exams'));
    }
    public function attend_exam_submit(Request $request)
    {
        foreach ($request->exams as  $exam_id) {
            ExamResult::create([
                'exam_id' => $exam_id,
                'user_id' => auth()->user()->id,
            ]);
        }

        return redirect()->back();
    }
    public function demo_all()
    {
        //function_body
        return view('admin.common.all');
    }
    public function demo_show()
    {
        //function_body
        return view('admin.common.show');
    }
    public function demo_create()
    {
        //function_body
        return view('admin.common.create');
    }
}
