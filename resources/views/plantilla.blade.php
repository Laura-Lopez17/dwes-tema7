<html>
    <head>
        <title>@yield('titulo')</title>
        @vite(['resources/sass/app.scss'])
    </head>
    <body>
        <header>
            <h1>Festival cortos</h1>
            <h1>Muy pronto</h1>
        </header>

            @include('partials.nav')

        <main>
            @yield('contenido')
        </main>

        <footer>
            <small>&copy;Festival DAW cortos</small>
        </footer>
    </body>
</html>