<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
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
        $sections = Section::with('faculty')->get();
        return
            view('sections.index', compact('sections'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $faculties = Faculty::all();
        return view('sections.create', compact('faculties'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Section::create(
            [
                'section_name' => $request->section_name,
                'faculty_id' => $request->faculty_id,
            ]
        );
        return redirect()->route('section.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($section)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $section = Section::findorFail($id);
        $faculties = Faculty::all();
        return view('sections.edit', compact('section','faculties'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $Section = Section::findorFail($id);
        $Section->update([
            'section_name' => $request->section_name,
            'faculty_id' => $request->faculty_id,

        ]);
        return redirect()->route('section.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Section::where('id', $id)->forceDelete();
        return redirect()->back();
    }
}
