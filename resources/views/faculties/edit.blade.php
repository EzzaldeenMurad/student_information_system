@extends('layouts.app')

@section('title')
    edit faculty
@endsection

@section('content')
    <div class="from-content">
        <form method=post action="{{ route('faculty.update', $faculty->id) }}">
            <div class="head">
                <h1>edit faculty Information</h1>

            </div> <!-- /Header -->
            @csrf
            @method('put')

            <!-- Main Form Started -->
            <label>Faculty Name :</label>
            <input type="text" placeholder="Faculty Name" name="faculty_name" value="{{ $faculty->faculty_name }}"
                class="from-input">

            {{-- <label >Date:</label>
        <input type="date" placeholder="1-1-2000" name="date"  required> --}}


            <input class="submit_button" type="submit" name="sub" value="save">
            <!-- Submit Button -->
        </form>
    </div>
@endsection
