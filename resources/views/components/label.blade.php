@props(['value'])

<label {{ $attributes->merge(['class' => 'lead']) }}>
    {{ $value ?? $slot }}
</label>
