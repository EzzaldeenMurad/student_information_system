@extends('layouts.app')
@section('title')
    edit section
@endsection

@section('content')
    <!-- <div class="bg-image"></div> -->
    <div class="from-content">
    <form method=post action="{{ route('section.update', $section->id) }}">
        <!-- Header -->
        <div class="head">
            <h1>Update section Information</h1>

        </div> <!-- /Header -->
        @csrf
        @method('put')
        <!-- Main Form Started -->
        <label>Section Name:</label>
        <input type="text" placeholder="Full Name" name="section_name" value="{{ $section->section_name }}" class="from-input">

        <label>faculty Name :</label>
        <select name="faculty_id" id="" class="from-input">
            <option value="">Select faculty</option>

            @foreach ($faculties as $faculty)
                <option value="{{ $faculty->id }}">{{ $faculty->faculty_name }} </option>
            @endforeach

        </select>
        <input class="submit_button" type="submit" name="sub" value="save">
        <!-- Submit Button -->
    </form>
    </div>
    @endsection
