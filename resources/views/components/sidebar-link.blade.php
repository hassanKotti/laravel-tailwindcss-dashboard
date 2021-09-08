@props(['active', 'href' => 'dashboard'])

@php
$classes = $active ? 'block' : 'hidden';
$bgClasses = $active ? 'bg-purple-50 dark:bg-dark-600 text-dark-400' : '';
@endphp

<div
    class="relative {{ $bgClasses }} px-6 py-4 inline-flex items-center w-full text-sm font-semibold text-dark-800 transition-colors duration-150
             hover:text-dark-500 dark:hover:text-dark-800 dark:text-dark-100 hover:bg-purple-50 dark:hover:bg-dark-500">
    <span class="absolute {{ $classes }}  inset-y-0 left-0 w-1 bg-purple-600 " aria-hidden="true"></span>
    {{ $slot }}

</div>
