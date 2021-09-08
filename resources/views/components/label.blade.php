@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-dark-400']) }}>
    {{ $value ?? $slot }}
</label>
