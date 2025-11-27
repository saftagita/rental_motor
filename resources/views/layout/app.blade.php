<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Rental Motor')</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #F5F5F5;
        }
    </style>

    @stack('styles')
</head>
<body>
    @include('partials.navbar')

    <div>
        @yield('content')
    </div>

    @include('partials.footer')
</body>
</html>