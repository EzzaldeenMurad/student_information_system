@extends('layouts.app')
@section('title')
    add course
@endsection

@section('content')
    <!-- <div class="bg-image"></div> -->
    <div class="from-content">
        <form method=post action="{{ route('course.store') }}">

            @csrf
            <div class="head">
                <h1>Add course Information</h1>
            </div>

            <label>Name:</label>
            <input type="text" placeholder="Name" name="course_name" class="from-input">

            <label>Section Name:</label>
            <select name="section_id" id="" class="from-input">
                <option value="">Select Section</option>

                @foreach ($sections as $section)
                    <option value="{{ $section->id }}">{{ $section->section_name }} </option>
                @endforeach
            </select>

            <label>teatcher Name:</label>
            <select name="teatcher_id" id="" class="from-input">
                <option value="">Select teatcher</option>
                @foreach ($teatchers as $teatcher)
                    <option value="{{ $teatcher->id }}">{{ $teatcher->teatcher_name }} </option>
                @endforeach

            </select>
            <label>Level:</label>
            <select name="level" id="" class="from-input">
                <option value="">Select Level</option>
                <option value="Level 1">Level 1</option>
                <option value="Level 2">Level 2</option>
                <option value="Level 3">Level 3</option>
                <option value="Level 4">Level 4</option>
                <option value="Level 5">Level 5</option>
            </select>

            <label>Term:</label>
            <select name="term" id="" class="from-input">
                <option value="">Select term</option>
                <option value="Term 1">Term 1</option>
                <option value="Term 2">Term 2</option>
                <option value="Term 3">Term 3</option>
            </select>

            <input class="submit_button" type="submit" name="sub" value="save">
        </form>
    </div>
@endsection
