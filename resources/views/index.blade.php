<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @stack('style')
    <link rel='stylesheet' href='{{ asset('asset/css/style.css') }}'>
</head>

<body>
    <nav>
        <div>
            <h6>Hriody</h6>
        </div>
        <div class="menu">
            <a href="{{ url('/') }}" id="home">Home</a>
            <a href="{{ url('/education') }}">Education</a>
            <a href="{{ url('/specialization') }}">Specialization</a>
            <a href="{{ url('/projects') }}">Projects</a>
            <a href="{{ url('/mystory') }}">My Story</a>
            <a href="{{ url('/contact') }}">Contacts</a>
        </div>
    </nav>

    @yield('main-contents')

    <script src="{{ asset('asset/js/script.js') }}"></script>
</body>

</html>
