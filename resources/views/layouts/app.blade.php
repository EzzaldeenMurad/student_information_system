<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    {{-- link css --}}
    <link rel="stylesheet" href="{{ asset('build/assets/css/all_min.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/css/sign_in_style.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/css/form_style.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/css/style.css') }}">


    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script src="{{ asset('build/assets/js/all.min.js') }}"></script>
</head>

<body class="body">
    <header><span><i><img src="{{ asset('build/assets/images/logo.png') }}" alt="No Image"></i>Student Information
            System</span>
    </header>
    <div id="app">
        @if (Auth::check())
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        <!-- Left Side Of Navbar -->

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            @guest
                                <div></div>
                                <!-- Authentication Links -->

                                {{-- @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif --}}

                                {{-- @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif --}}
                            @else
                                @php

                                    $currentPage = Request::path();

                                    // $active = ['home', 'student', 'teatcher', 'section', 'faculty', 'course', 'exam'];
                                    $home = 'fa-solid fa-house';
                                    $student = 'fa-solid fa-user-graduate';
                                    $teatcher = 'fa-solid fa-person-chalkboard';
                                    $section = 'fa-regular fa-building';
                                    $faculty = 'fa-solid fa-tree-city';
                                    $course = 'fa-solid fa-book';
                                    $exam = 'fa-solid fa-list-check';
                                    $admins = 'fa-solid fa-user-gear';
                                @endphp
                                <li>
                                    <ul class="navbar-nav" id="nav_id">
                                        <li class="nav-item {{ $currentPage == 'home' ? 'active' : '' }}">
                                            <a class="nav-link" href="{{ route('home') }}">
                                                <i id="icon_id" class="{{ $home }}"></i>Home
                                            </a>
                                        </li>
                                        <li class="nav-item {{ $currentPage == 'student' ? 'active' : '' }}">
                                            <a class="nav-link" href="{{ route('student.index') }}">
                                                <i id="icon_id" class="{{ $student }}"></i>Students
                                            </a>
                                        </li>
                                        <li class="nav-item {{ $currentPage == 'teatcher' ? 'active' : '' }}">
                                            <a class="nav-link" href="{{ route('teatcher.index') }}">
                                                <i id="icon_id" class="{{ $teatcher }}"></i>Teachers
                                            </a>
                                        </li>
                                        <li class="nav-item {{ $currentPage == 'course' ? 'active' : '' }}">
                                            <a class="nav-link" href="{{ route('course.index') }}">
                                                <i id="icon_id" class="{{ $course }}"></i>Courses
                                            </a>
                                        </li>
                                        <li class="nav-item {{ $currentPage == 'exam' ? 'active' : '' }}">
                                            <a class="nav-link" href="{{ route('exam.index') }}">
                                                <i id="icon_id" class="{{ $exam }}"></i>Exams
                                            </a>
                                        </li>
                                        <li class="nav-item {{ $currentPage == 'section' ? 'active' : '' }}">
                                            <a class="nav-link" href="{{ route('section.index') }}">
                                                <i id="icon_id" class="{{ $section }}"></i>Sections
                                            </a>
                                        </li>
                                        <li class="nav-item {{ $currentPage === 'faculty' ? 'active' : '' }}">
                                            <a class="nav-link" href="{{ route('faculty.index') }}">
                                                <i id="icon_id" class="{{ $faculty }}"></i>Faculty
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>

                            @endguest
                        </ul>



                    </div>
                </div>
            </nav>
        @endif
        @yield('content')
        {{-- <main class="py-4">

        </main> --}}
    </div>
</body>

</html>
