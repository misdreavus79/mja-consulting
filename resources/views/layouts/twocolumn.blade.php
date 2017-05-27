<!DOCTYPE HTML>
<html lang="en-us">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $page_title }} | MJAMangual</title>
        <link rel="stylesheet" type="text/css" href="{{ elixir('css/app.css') }}">
    </head>
    <body class="{{ $body_class }}">
        <div class="container">
            <section class="siteInfo">
                <header class="siteHeader">
                    @include('includes.header')
                </header>
                <footer class="siteFooter">
                    @include('includes.footer')
                </footer>
            </section>
            <main id="main" class="main" role="main">
                @yield('hero')
                <section class="primary group">
                    @yield('content')
                </section>
            </main>
        </div>
        <script src="{{ elixir('js/app.js') }}"></script>
    </body>
</html>