<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Fathesshop')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="shortcut icon" href="https://1.bp.blogspot.com/-RfAEZXTk7jE/Xfa-z2IXwOI/AAAAAAAACwk/OsLQmFcgubkrd_NiDdL6CTWvnuTVbncSgCEwYBhgL/s32/apple-touch-icon.png" type="image/x-icon">
    <link href='https://1.bp.blogspot.com/-RfAEZXTk7jE/Xfa-z2IXwOI/AAAAAAAACwk/OsLQmFcgubkrd_NiDdL6CTWvnuTVbncSgCEwYBhgL/s300/apple-touch-icon.png' rel='apple-touch-icon'/>
    <link href='https://1.bp.blogspot.com/-RfAEZXTk7jE/Xfa-z2IXwOI/AAAAAAAACwk/OsLQmFcgubkrd_NiDdL6CTWvnuTVbncSgCEwYBhgL/s57/apple-touch-icon.png' rel='apple-touch-icon' sizes='57x57'/>
    <link href='https://1.bp.blogspot.com/-RfAEZXTk7jE/Xfa-z2IXwOI/AAAAAAAACwk/OsLQmFcgubkrd_NiDdL6CTWvnuTVbncSgCEwYBhgL/s72/apple-touch-icon.png' rel='apple-touch-icon' sizes='72x72'/>
    <link href='https://1.bp.blogspot.com/-RfAEZXTk7jE/Xfa-z2IXwOI/AAAAAAAACwk/OsLQmFcgubkrd_NiDdL6CTWvnuTVbncSgCEwYBhgL/s76/apple-touch-icon.png' rel='apple-touch-icon' sizes='76x76'/>
    <link href='https://1.bp.blogspot.com/-RfAEZXTk7jE/Xfa-z2IXwOI/AAAAAAAACwk/OsLQmFcgubkrd_NiDdL6CTWvnuTVbncSgCEwYBhgL/s114/apple-touch-icon.png' rel='apple-touch-icon' sizes='114x114'/>
    <link href='https://1.bp.blogspot.com/-RfAEZXTk7jE/Xfa-z2IXwOI/AAAAAAAACwk/OsLQmFcgubkrd_NiDdL6CTWvnuTVbncSgCEwYBhgL/s120/apple-touch-icon.png' rel='apple-touch-icon' sizes='120x120'/>
    <link href='https://1.bp.blogspot.com/-RfAEZXTk7jE/Xfa-z2IXwOI/AAAAAAAACwk/OsLQmFcgubkrd_NiDdL6CTWvnuTVbncSgCEwYBhgL/s144/apple-touch-icon.png' rel='apple-touch-icon' sizes='144x144'/>
    <link href='https://1.bp.blogspot.com/-RfAEZXTk7jE/Xfa-z2IXwOI/AAAAAAAACwk/OsLQmFcgubkrd_NiDdL6CTWvnuTVbncSgCEwYBhgL/s152/apple-touch-icon.png' rel='apple-touch-icon' sizes='152x152'/>
    <link href='https://1.bp.blogspot.com/-RfAEZXTk7jE/Xfa-z2IXwOI/AAAAAAAACwk/OsLQmFcgubkrd_NiDdL6CTWvnuTVbncSgCEwYBhgL/s180/apple-touch-icon.png' rel='apple-touch-icon' sizes='180x180'/>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
@include('layouts.navigation')

        <main class="py-4">
            @include("alert")
            @yield('content')
        </main>
    </div>
</body>
@include('layouts.footer')
</html>
