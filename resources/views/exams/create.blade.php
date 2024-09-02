@extends('layouts.app')
@section('title')
    add exam
@endsection

@section('content')
    <!-- <div class="bg-image"></div> -->
    <div class="from-content">
        <form method=post action="{{ route('exam.store') }}">
            <!-- Header -->
            <div class="head">
                <h1>Add Exam Information</h1>

            </div> <!-- /Header -->
            @csrf

            <label>Student Name:</label>
            <select name="student_id" id="mySelect" class="from-input">
                <option value="">Select Student Name</option>
                @foreach ($students as $student)
                    <option value="{{ $student->id }}">{{ $student->student_name }} </option>
                @endforeach
            </select>

            <select name="course_id" id="" class="from-input">
                <option value="">Select Course Name</option>
                @foreach ($courses as $course)
                    <option value="{{ $course->id }}">{{ $course->course_name }} </option>
                @endforeach
            </select>

            <label>Exam Date:</label>
            <input type="date" placeholder="Exam Date" name="exam_date" class="from-input" required>

            <label>Exam Degree:</label>
            <input type="text" placeholder="Exam Degree" name="exam_degree" class="from-input">

            <label>Student Degree:</label>
            <input type="text" placeholder="Student Degree" name="student_degree" class="from-input" required>


            <input class="submit_button" type="submit" name="sub" value="save">
            <!-- Submit Button -->
        </form>
    </div>
@endsection
