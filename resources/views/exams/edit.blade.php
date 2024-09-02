@extends('layouts.app')
@section('title')
    edit exam
@endsection

@section('content')
    <!-- <div class="bg-image"></div> -->
    <div class="from-content">
    <form method=post action="{{ route('exam.update', $exam->id) }}">
        <!-- Header -->
        <div class="head">
            <h1>Update Exam Information</h1>

        </div> <!-- /Header -->
        @csrf
        @method('put')

        <label>Student Name:</label>
        <select name="student_id" id="mySelect" class="from-input">
            <option value="">Select Student Name</option>
            @foreach ($students as $student)
                <option value="{{ $student->id }}" {{ $student->id === $exam->student_id ? 'selected' : '' }}>
                    {{ $student->student_name }} </option>
            @endforeach
        </select>

        <select name="course_id" id="" class="from-input">
            <option value="">Select Course Name</option>
            @foreach ($courses as $course)
                <option value="{{ $course->id }}" {{ $course->id === $exam->course_id ? 'selected' : '' }}>
                    {{ $course->course_name }} </option>
            @endforeach
        </select>

        <label>Exam Date:</label>
        <input type="date" placeholder="Exam Date" name="exam_date" value="{{ $exam->exam_date }}" class="from-input" required>

        <label>Exam Degree:</label>
        <input type="text" placeholder="Exam Degree" name="exam_degree" value="{{ $exam->exam_degree }}" class="from-input">

        <label>Student Degree:</label>
        <input type="text" placeholder="Student Degree" name="student_degree" value="{{ $exam->student_degree }}" class="from-input"
            required>


        <input class="submit_button" type="submit" name="sub" value="save">
        <!-- Submit Button -->
    </form>
    </div>
@endsection
