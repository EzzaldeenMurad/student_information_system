<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Exam;
use App\Models\Student;
use Illuminate\Http\Request;

class ExamController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $exams = Exam::with('student', 'student')->get();
        // $exams = Exam::all();

        return view('exams.index', compact('exams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $students = Student::all();
        $courses = Course::all();
        return view('exams.create', compact('courses', 'students'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Exam::create(
            [
                'student_id' => $request->student_id,
                'course_id' => $request->course_id,
                'exam_date' => $request->exam_date,
                'exam_degree' => $request->exam_degree,
                'student_degree' => $request->student_degree,
            ]
        );
        return redirect()->route('exam.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($exam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $exam = Exam::findorFail($id);
        $students = Student::all();
        $courses = Course::all();
        return view('exams.edit', compact('exam', 'students', 'courses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $exam = Exam::findorFail($id);
        $exam->update([
            'student_id' => $request->student_id,
            'course_id' => $request->course_id,
            'exam_date' => $request->exam_date,
            'exam_degree' => $request->exam_degree,
            'student_degree' => $request->student_degree,
        ]);
        return redirect()->route('exam.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Exam::where('id', $id)->forceDelete();
        return redirect()->back();
    }
}
