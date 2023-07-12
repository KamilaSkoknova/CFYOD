@props(['submit'])

<div {{ $attributes->merge(['class' => 'my-2']) }}>
    <x-section-title>
        <x-slot name="title">{{ $title }}</x-slot>
        <x-slot name="description">{{ $description }}</x-slot>
    </x-section-title>

    <div class="mt-5">
        <form wire:submit.prevent="{{ $submit }}">
            <div class="bg-white">
                {{ $form }}
            </div>

            @if (isset($actions))
                <div class="my-3">
                    {{ $actions }}
                </div>
            @endif
        </form>
    </div>
</div>
