<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Faculty;
use App\Models\Section;
use App\Models\Student;
use App\Models\Teatcher;
use Illuminate\Http\Request;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $students = Student::getTotalStudents();
        $teatchers = Teatcher::getTotalTeatchers();
        $faculties = Faculty::getTotalFaculties();
        $sections = Section::getTotalSections();
        $courses = Course::getTotalCourses();
        return view('home', compact('students', 'courses', 'sections', 'faculties', 'teatchers'));
    }
}
