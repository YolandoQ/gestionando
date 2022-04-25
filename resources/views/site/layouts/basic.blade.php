<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Gestionando - @yield('title')</title>
        <meta charset="utf-8">
        
        <link rel="stylesheet" href={{asset("css/style.css")}}>
    </head>

    <body>
        @include('site.layouts.partials.header')
        @yield('basic_content')
    </body>
</html>