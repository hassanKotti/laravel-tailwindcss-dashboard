@props(['active', 'href' => 'dashboard'])

@php
$classes = $active ? 'block' : 'hidden';
$bgClasses = $active ? 'bg-purple-50 dark:bg-gray-600 text-gray-400' : '';
@endphp

<div
    class="relative {{ $bgClasses }} px-6 py-4 inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150
             hover:text-gray-500 dark:hover:text-gray-800 dark:text-gray-100 hover:bg-purple-50 dark:hover:bg-gray-500">
    <span class="absolute {{ $classes }}  inset-y-0 left-0 w-1 bg-purple-600 " aria-hidden="true"></span>
    {{ $slot }}

</div>
