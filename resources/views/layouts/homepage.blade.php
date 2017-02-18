<!DOCTYPE HTML>
<html lang="en-us">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $page_title }} | Impruv Fitness and Wellness</title>
        <link rel="stylesheet" type="text/css" href="{{ elixir('css/app.css') }}">
    </head>
    <body>
        <div class="container">
            <header>
                @include('includes.header')
                @yield('hero')
            </header>
            <main id="main" role="main">
                @yield('content')
            </main>
            <footer class="group">
                @include('includes.footer')
            </footer>
        </div>
        <script src="{{ elixir('js/app.js') }}"></script>
    </body>
</html>