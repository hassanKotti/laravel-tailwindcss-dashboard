@props(['disabled' => false, 'round' => 'md'])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'rounded-' . $round . ' shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 dark:bg-dark-700 dark:border-dark-500']) !!}>
