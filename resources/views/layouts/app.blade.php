<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @livewireStyles
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/detect-moded.js') }}" defer></script>
</head>

<body class="font-sans antialiased overflow-y-hidden">
    <div class="min-h-screen bg-gray-100 dark:bg-dark-500 dark:text-gray-400 flex ">
        <div class="max-h-screen">
            <!-- Page Sidebar -->
            @include('layouts.sidebar')
        </div>
        <div class="w-full">
            <!-- Page Header -->
            @include('layouts.navigation')

            <!-- Page Content -->
            <main class="overscroll-auto overflow-y-scroll h-4/5">
                {{ $slot }}
            </main>

            <!-- Page Footer -->
            @include('layouts.footer')
        </div>
    </div>
    @livewireScripts

</body>

</html>
