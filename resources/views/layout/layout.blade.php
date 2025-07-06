<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        @include('partials.main')
    </head>
    
    <body id="section_1">

    @include('partials.header')

    @include('partials.nav')

        <main>
        @yield('content')
        </main>

    @include('partials.footer')

    </body>
</html>