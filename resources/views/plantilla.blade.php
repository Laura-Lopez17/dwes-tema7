<html>

<head>
    <title>@yield('titulo')</title>
    @vite(['resources/sass/app.scss'])
</head>

<body>

    <a href="{{ route('inicio') }}">Home</a>

    <main>
        @yield('contenido')
    </main>

    <footer>
        <small>&copy;Festival DAW cortos</small>
    </footer>
</body>

</html>