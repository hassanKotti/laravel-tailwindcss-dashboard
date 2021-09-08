<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full transition-all duration-500 ease-in-out">

<head>
    <x-head />
</head>

<body class="overflow-y-hidden font-sans antialiased">
    <div class="flex min-h-screen bg-dark-50 dark:bg-dark-900 dark:text-dark-400 ">
        <div class="max-h-screen">
            <!-- Page Sidebar -->
            @include('layouts.sidebar')
        </div>
        <div class="flex flex-col w-full min-h-screen">
            <!-- Page Header -->
            @include('layouts.navigation')

            <!-- Page Content -->
            <main class="flex-grow overflow-y-scroll overscroll-auto h-96">
                {{ $slot }}
                <!-- Page Footer -->
                <footer>
                    @include('layouts.footer')
                </footer>
            </main>

        </div>
    </div>
    @livewireScripts
</body>

</html>
