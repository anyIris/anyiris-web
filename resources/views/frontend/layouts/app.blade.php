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
        <link href="https://fonts.googleapis.com/css?family=Gothic+A1&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

        {{-- styles --}}
        <link rel="stylesheet" href="{{mix('/css/app.css')}}">
        @yield('styles')
    </head>
    <body class="@yield('page', '')">
        <div id="app">
            @include('frontend.layouts.header')
            <div class="content">
                @include('frontend.layouts.nav')
                <div class="container">
                    @yield('content')
                </div>
            </div>
            @include('frontend.layouts.footer')
        </div>
        @stack('after_scripts')
    </body>
</html>
