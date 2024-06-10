<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Veterinaria Hogar Animal')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    @include('partials.navbar')
    <div class="container">
        @yield('content')
    </div>
    @include('partials.footer')
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
