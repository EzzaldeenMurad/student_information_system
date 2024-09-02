@extends('layouts.app')
@section('title')
    edit student
@endsection

@section('content')
<div class="from-content">
    <form  method=post action="{{ route('student.update', $student->id) }}">
        @csrf
        @method('put')
        <div class="head">
            <h1>Update Student Information</h1>
        </div>

        <label>Name:</label>
        <input type="text" placeholder="Name" name="student_name" value="{{ $student->student_name }}" class="from-input">

        <label>ID:</label>
        <input type="text" placeholder="ID" name="student_no" value="{{ $student->student_no }}" class="from-input" required>

        <label>Sex:</label>
        <select name="gender" id="" class="from-input">
            <option value="" @if (old('gender', $student->gender) === '') selected @endif>Select Sex</option>
            <option value="Male" @if (old('gender', $student->gender) === 'Male') selected @endif>Male</option>
            <option value="Female" @if (old('gender', $student->gender) === 'Female') selected @endif>Female</option>
        </select>

        <label>Address:</label>
        <input type="text" placeholder="Address" name="address" value="{{ $student->address }}" class="from-input" required>

        <label>Birth Date :</label>
        <input type="date" placeholder="Birth Date" name="birth_date" value="{{ $student->birth_date }}" class="from-input">

        <label>Phone Number:</label>
        <input type="text" placeholder="Phone Number" name="phone_number" value="{{ $student->phone_number }}" class="from-input" required>

        <label>Nationality:</label>
        <input type="text" placeholder="Nationality" name="nationality" value="{{ $student->nationality }}" class="from-input" required>

        <label>Section Name:</label>
        <select name="section_id" id="" aria-valuenow=" {{ $student->section_id }}" class="from-input">
            @foreach ($sections as $section)
                <option value="{{ $section->id }}" {{ $section->id === $student->section_id ? 'selected' : '' }}>
                    {{ $section->section_name }} </option>
            @endforeach
        </select>

        <label>Level:</label>
        @php
            $levels = ['Level 1', 'Level 2', 'Level 3', 'Level 4', 'Level 5'];
        @endphp

        <select name="student_level" id="" class="from-input">
            <option value="">Select Level</option>
            @foreach ($levels as $level)
                <option value="{{ $level }}" {{ $student->student_level == $level ? 'selected' : '' }}>
                    {{ $level }}
                </option>
            @endforeach
        </select>

        <input class="submit_button" type="submit" name="sub" value="save">
    </form>
</div>
@endsection
