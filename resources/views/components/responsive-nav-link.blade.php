@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block pl-3 pr-4 py-2 border-l-4 border-purple-400 text-base font-medium text-purple-50 bg-purple-500 focus:outline-none focus:text-purple-50 focus:bg-purple-500 focus:border-purple-700 transition duration-150 ease-in-out'
            : 'block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-dark-400 hover:text-dark-400 hover:bg-dark-300 hover:border-dark-300 focus:outline-none focus:text-dark-300 focus:bg-dark-500 focus:border-dark-200 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
