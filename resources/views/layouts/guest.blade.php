<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="transition-all duration-500 ease-in-out">

<head>
    <x-head />
</head>

<body>
    <body class="antialiased leading-normal text-gray-700 bg-white dark:bg-gray-900 dark:text-gray-300 bg-opacity-60">

        {{ $slot }}
    </div>
</body>

</html>
