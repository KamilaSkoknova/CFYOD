@props(['for'])

@error($for)
    <p {{ $attributes->merge(['class' => 'lead']) }}>{{ $message }}</p>
@enderror
