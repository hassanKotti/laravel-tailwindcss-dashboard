@props(['disabled' => false, 'round' => 'md'])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'rounded-' . $round . ' shadow-sm border-dark-300 focus:border-purple-300 focus:ring focus:ring-purple-200 focus:ring-opacity-50 dark:bg-dark-700 dark:border-dark-500']) !!}>
