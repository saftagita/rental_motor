<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Admin')</title>

    @stack('styles')

    <style>
        body {
            background: #F5F5F5;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 40px;
        }
    </style>
</head>

<body>
    <main>
        @include('partials.sidebar')

        <div class="content-wrapper">
            @yield('content')
        </div>
    </main>
</body>

</html>
