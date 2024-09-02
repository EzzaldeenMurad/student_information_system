@extends('layouts.app')

@section('title')
    home
@endsection

@section('content')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <div style="display: flex;">
        <a href="{{ route('student.index') }}" class="move">
            <div class="cart">
                <img src="{{ asset('build/assets/images/students.jpg') }}" alt="No Image">
                <div class="cart-details">
                    <h3 class="cart-title">Students</h3>
                    <p class="cart-description">{{$students}} </p>
                </div>
            </div>
        </a>
        <br>
        <a href="{{ route('teatcher.index') }}" class="move">
            <div class="cart">
                <img src="{{ asset('build/assets/images/teatcher.jpg') }}" alt="Product Image">
                <div class="cart-details">
                    <h3 class="cart-title">Teatchers</h3>
                    <p class="cart-description"> {{$teatchers}}</p>
                </div>
            </div>
        </a>
        <br>
        <a href="{{ route('section.index') }}" class="move">
            <div class="cart">
                <img src="{{ asset('build/assets/images/section.jpg') }}" alt="Product Image">
                <div class="cart-details">
                    <h3 class="cart-title">Sections</h3>
                    <p class="cart-description">{{$sections}}</p>
                </div>
            </div>
        </a>

    </div>
    <br>
    <div style="display: flex;">
        <a href="{{ route('faculty.index') }}" class="move">
            <div class="cart">
                <img src="{{ asset('build/assets/images/faculty.jpg') }}" alt="Product Image">
                <div class="cart-details">
                    <h3 class="cart-title">faculties</h3>
                    <p class="cart-description">{{$faculties }}</p>
                </div>
            </div>
        </a>
        <br>
        <a href="show_courses.php" class="move">
            <div class="cart">
                <img src="{{ asset('build/assets/images/courses.jpg') }}" alt="Product Image">
                <div class="cart-details">
                    <h3 class="cart-title">Courses</h3>
                    <p class="cart-description">{{$courses}} </p>
                </div>
            </div>
        </a>

    </div>
@endsection
