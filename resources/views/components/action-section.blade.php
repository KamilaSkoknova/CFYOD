<div {{ $attributes->merge(['class' => 'my-3']) }}>
    <x-section-title>
        <x-slot name="title">{{ $title }}</x-slot>
        <x-slot name="description">{{ $description }}</x-slot>
    </x-section-title>
    <div class="py-4">
        {{ $content }}
    </div>
</div>
