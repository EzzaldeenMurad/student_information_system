<!DOCTYPE html>
<html lang="en">

<head>

    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/form_style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/all.min.js') }}"></script>
</head>

<body>
    @php
        $isActive = 'color: orange;';

    @endphp
    <header><span><i><img src="images/logo.png" alt="No Image"></i>Student Information System</span></header>
   


@yield('content')


</body>

</html>
