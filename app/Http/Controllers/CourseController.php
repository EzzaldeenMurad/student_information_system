<?php

namespace App\Http\Controllers;

use App\Exceptions\DatabaseConnectionException;
use App\Models\Course;
use App\Models\Section;
use App\Models\Teatcher;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
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
        $courses = Course::with('section', 'teatcher')->get();
        return
            view('courses.index', compact('courses'));

            
        // try {
            // $courses = Course::with('section', 'teatcher')->get();
            // return
            //     view('courses.index', compact('courses'));

        // } catch (Exception $e) {
        //     return view('errors.database');
        // }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sections = Section::all();
        $teatchers = Teatcher::all();
        return view('courses.create', compact('sections', 'teatchers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Course::create(
            [
                'course_name' => $request->course_name,
                'section_id' => $request->section_id,
                'teatcher_id' => $request->teatcher_id,
                'course_level' => $request->level,
                'course_term' => $request->term,
            ]
        );
        return redirect()->route('course.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $sections = Section::all();
        $teatchers = Teatcher::all();
        $course = Course::findorFail($id);

        return view('courses.edit', compact('course', 'sections', 'teatchers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {

        $course = Course::findorFail($id);
        $course->update([
            'course_name' => $request->course_name,
            'section_id' => $request->section_id,
            'teatcher_id' => $request->teatcher_id,
            'course_level' => $request->level,
            'course_term' => $request->term,
        ]);
        return redirect()->route('course.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Course::where('id', $id)->forceDelete();
        return redirect()->back();
    }
}
