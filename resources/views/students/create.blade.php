@extends('layouts.app')
@section('title')
    add student
@endsection

@section('content')
    <!-- <div class="bg-image"></div> -->
    <div class="from-content">
    <form method=post action="{{ route('student.store') }}">
@csrf
        <div class="head">
            <h1>Add Student Information</h1>
        </div>

        <label>Name:</label>
        <input  type="text" placeholder="Name" name="student_name" class="from-input">

        <label>ID:</label>
        <input type="text" placeholder="ID" name="student_no" class="from-input" required>

        <label>Sex:</label>
        <select name="gender" id="" class="from-input">
            <option value="">Select Sex</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>

        <label>Address:</label>
        <input type="text" placeholder="Address" name="address" class="from-input" required>

        <label>DOB:</label>
        <input type="date" placeholder="Birth Date" name="birth_date" class="from-input">

        <label>Phone Number:</label>
        <input type="text" placeholder="Phone Number" name="phone_number" class="from-input" required>

        <label>Nationality:</label>
        <input type="text" placeholder="Nationality" name="nationality" class="from-input" required>

        <label>Section Name:</label>
        <select name="section_id" id="" class="from-input">
            @foreach ($sections as $section)
                <option value="{{ $section->id }}">{{ $section->section_name }} </option>
            @endforeach
        </select>
        <label>Level:</label>
        <select name="student_level" id="" class="from-input">
            <option value="">Select Level</option>
            <option value="Level 1">Level 1</option>
            <option value="Level 2">Level 2</option>
            <option value="Level 3">Level 3</option>
            <option value="Level 4">Level 4</option>
            <option value="Level 5">Level 5</option>
        </select>

        <input class="submit_button" type="submit" name="sub" value="save">
    </form>
</div>
    @endsection
