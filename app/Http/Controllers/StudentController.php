<?php

namespace App\Http\Controllers;

use App\Models\Section;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
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

        $students = Student::all();
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sections = Section::all();
        return view('students.create', compact('sections'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Student::create(
            [
                'student_name' => $request->student_name,
                'student_no' => $request->student_no,
                'gender' => $request->gender,
                'phone_number' => $request->phone_number,
                'birth_date' => $request->birth_date,
                'address' => $request->address,
                'nationality' => $request->nationality,
                'section_id' => $request->section_id,
                'student_level' => $request->student_level,
            ]
        );
        return redirect()->route('student.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($student)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $student = Student::findorFail($id);
        $sections = Section::all();
        return view('students.edit', compact('student','sections'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $student = Student::findorFail($id);
        $student->update([
            'student_name' => $request->student_name,
            'student_no' => $request->student_no,
            'gender' => $request->gender,
            'phone_number' => $request->phone_number,
            'birth_date' => $request->birth_date,
            'address' => $request->address,
            'nationality' => $request->nationality,
            'section_id' => $request->section_id,
            'student_level' => $request->student_level,
        ]);
        return redirect()->route('student.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Student::where('id', $id)->forceDelete();
        return redirect()->back();
    }
}
