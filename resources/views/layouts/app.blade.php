<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>cut</title>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    </head>
    <body>
        @include('layouts.navigation')

        {{ $slot }}

        @include('layouts.footer')

        @include('layouts.copyright')

        @include('layouts.scripts')
    </body>
</html>
