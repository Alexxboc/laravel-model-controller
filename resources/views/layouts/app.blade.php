<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> @yield('page-title', 'welcome')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        <header id="site_header">
            <div class="logo text-center">
                MOVIES
            </div>
            <!-- /.logo -->
        </header>
        <!-- /#site_header -->

        <main id="site_main">
            @yield('content')
        </main>
        <!-- /#site_main -->

        <footer id="site_footer">
            <div class="copy text-center">
                Made with &hearts; by Alexx
            </div>
            <!-- /.copy -->
        </footer>
        <!-- /#site_footer -->

    <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
