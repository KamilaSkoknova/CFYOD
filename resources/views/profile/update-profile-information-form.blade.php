<x-form-section submit="updateProfileInformation">
    <x-slot name="title">
        {{ __('Profile Information') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Update your account\'s profile information.') }}
    </x-slot>

    <x-slot name="form">
        <div class="mt-4">
            <x-label for="name" value="{{ __('Name') }}" />
            <x-input id="name" type="text" class="form-control" wire:model.defer="state.name" autocomplete="name" />
            <x-input-error for="name" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-label for="about_me" value="{{ __('About_me') }}" />
            <x-input id="about_me" type="text" class="form-control" wire:model.defer="state.about_me" autocomplete="about_me" />
            <x-input-error for="about_me" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-label for="phone" value="{{ __('Phone') }}" />
            <x-input id="phone" type="text" class="form-control" wire:model.defer="state.phone" autocomplete="phone" />
            <x-input-error for="phone" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-label for="adress" value="{{ __('Adress') }}" />
            <x-input id="adress" type="text" class="form-control" wire:model.defer="state.adress" autocomplete="adress" />
            <x-input-error for="adress" class="mt-2" />
        </div>

    </x-slot>

    <x-slot name="actions">
        <x-action-message class="mt-3" on="saved">
            {{ __('Saved.') }}
        </x-action-message>

        <x-button wire:loading.attr="disabled" wire:target="photo">
            {{ __('Save') }}
        </x-button>
    </x-slot>
</x-form-section>
