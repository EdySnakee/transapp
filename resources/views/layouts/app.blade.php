<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Translúcido')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;700&family=Fraunces:wght@600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/site.css') }}">
    @yield('head')
</head>

<body>
    <div class="page">
        @include('partials.header')

        <main class="page-main">
            @yield('content')
        </main>

        @include('partials.footer')
    </div>
</body>

</html>
