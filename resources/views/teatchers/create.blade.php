@extends('layouts.app')
@section('title')
    add teatcher
@endsection

@section('content')
    <!-- <div class="bg-image"></div> -->
    <div class="from-content">
    <form method=post action="{{ route('teatcher.store') }}">
        <!-- Header -->
        <div class="head">
            <h1>Add teatchar Information</h1>

        </div> <!-- /Header -->
        @csrf
        <!-- Main Form Started -->
        <label> Name:</label>
        <input type="text" placeholder="Full Name" name="teatcher_name" class="from-input">

        <label> phone number:</label>
        <input type="text" placeholder="phone number" name="phone_number" class="from-input" required>
        <label>Address:</label>
        <input type="text" placeholder="Address:" name="address" class="from-input" required>
        <label>salary:</label>
        <input type="text" placeholder="salary" name="salary" class="from-input" required>
        <input class="submit_button" type="submit" name="sub" value="save">
        <!-- Submit Button -->
    </form>
    </div>
@endsection
