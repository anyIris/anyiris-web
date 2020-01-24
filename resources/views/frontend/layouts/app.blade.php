<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @yield('meta')
        <title>@yield('title', env('APP_NAME'))</title>

        {{-- scripts --}}
        @stack('before_scripts')

        {{-- fonts --}}
        <link rel="stylesheet" href="https://use.typekit.net/umc1nis.css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        {{-- styles --}}
        <link rel="stylesheet" href="{{mix('/css/app.css')}}">
        @yield('styles')
    </head>
    <body class="@yield('page', '')">
        <div id="app">
            @include('frontend.layouts.header')
            <div class="container">
                @yield('content')
            </div>
        </div>
        @stack('after_scripts')
    </body>
</html>
