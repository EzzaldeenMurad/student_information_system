@extends('layouts.app')
@section('title')
    edit teatcher
@endsection
@section('content')
    <!-- <div class="bg-image"></div> -->
    <div class="from-content">
    <form method=post action="{{ route('teatcher.update', $teatcher->id) }}">
        <!-- Header -->
        <div class="head">
            <h1>Update teatchar Information</h1>

        </div> <!-- /Header -->
        @csrf
        @method('put')
        <!-- Main Form Started -->
        <label> Name:</label>
        <input type="text" placeholder="Full Name" name="teatcher_name" value="{{ $teatcher->teatcher_name }}" class="from-input">

        <label> phone number:</label>
        <input type="text" placeholder="phone number" name="phone_number" value="{{ $teatcher->phone_number }}" class="from-input" required>
        <label>Address:</label>
        <input type="text" placeholder="Address:" name="address" value="{{ $teatcher->address }}" class="from-input" required>
        <label>salary:</label>
        <input type="text" placeholder="salary" name="salary" value="{{ $teatcher->salary }}" class="from-input" required>
        <input class="submit_button" type="submit" name="sub" value="save">
        <!-- Submit Button -->
    </form>
    </div>
@endsection
