<html>
    <head>
        <title>Apk @yield('title')</title>
    </head>
    <body>
        @section('header')
            <h1>DEFAULT HEADER</h1>
        @show
        {{-- jika child tidak membuat section makan akan ditampilkan view default --}}
        @section('content')
            <p>default content</p>
        @show
    </body>
</html>