@extends('layouts.app')

@section('title')
    add faculty
@endsection

@section('content')
    <!-- <div class="bg-image"></div> -->
    <div class="from-content">
    <form method=post action="{{ route('faculty.store') }}">
        <div class="head">
            <h1>Add faculty Information</h1>

        </div> <!-- /Header -->
        @csrf
        <!-- Main Form Started -->
        <label>Faculty Name :</label>
        <input type="text" placeholder="Faculty Name" name="faculty_name" class="from-input">

        {{-- <label >Date:</label>
        <input type="date" placeholder="1-1-2000" name="date"  required> --}}


        <input class="submit_button" type="submit" name="sub" value="save">
        <!-- Submit Button -->
    </form>
    </div>
@endsection
