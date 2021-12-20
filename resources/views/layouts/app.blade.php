<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/backoffice/all.css') }}">
        <link rel="stylesheet" href="{{ asset('css/frontoffice/tailwind.css') }}">
        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/backoffice/app.js') }}" defer></script>
        <script src="{{ asset('/js/backoffice/alpine.min.js') }}" defer></script>
        <script src="{{ asset('/js/backoffice/script.js') }}" defer></script>
    </head>
    <body class="text-blueGray-700 antialiased">
        <noscript>You need to enable JavaScript to run this app.</noscript>
        <div id="root">
            @livewire('nav-component')
            <div class="relative md:ml-64 bg-blueGray-50">
                @livewire('backoffice-header')
                {{ $slot }}
            </div>
        </div>
        @stack('modals')
        @livewireScripts
    </body>
</html>
