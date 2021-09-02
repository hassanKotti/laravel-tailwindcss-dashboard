@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block pl-3 pr-4 py-2 border-l-4 border-indigo-400 text-base font-medium text-indigo-700 bg-indigo-900 focus:outline-none focus:text-indigo-800 focus:bg-indigo-600 focus:border-indigo-700 transition duration-150 ease-in-out'
            : 'block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-indigo-600 hover:text-indigo-800 hover:bg-indigo-900 hover:border-indigo-300 focus:outline-none focus:text-indigo-800 focus:bg-indigo-50 focus:border-indigo-300 transition duration-150 ease-in-out';
@endphp

<div class="mb-4">
    <a  {{ $attributes->merge(['class' => $classes]) }} >
         {{ $slot }}
    </a>
</div>
