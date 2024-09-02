@extends('layouts.app')
@section('title')
    add section
@endsection

@section('content')
    <!-- <div class="bg-image"></div> -->
    <div class="from-content">
    <form method=post action="{{ route('section.store') }}">
        <div class="head">
            <h1>Add section Information</h1>

        </div> <!-- /Header -->
        @csrf
        <!-- Main Form Started -->
        <label>section Name :</label>
        <input type="text" placeholder="section Name" name="section_name" class="from-input">



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
