<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="transition-all duration-500 ease-in-out">

<head>
    <x-head />
</head>

<body>
    <div class="font-sans antialiased text-dark-900 dark:text-dark-300 dark:bg-dark-900">
        {{ $slot }}
    </div>
</body>

</html>
