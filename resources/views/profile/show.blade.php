<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                    @livewire('profile.update-profile-information-form')
                    <x-section-border />
                @endif
                @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                    <div>
                        @livewire('profile.update-password-form')
                    </div>
                    <x-section-border />
                @endif
                @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                    <div>
                        @livewire('profile.two-factor-authentication-form')
                    </div>
                    <x-section-border />
                @endif
                <div>
                    @livewire('profile.logout-other-browser-sessions-form')
                </div>
                @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                    <x-section-border />
                        @livewire('profile.delete-user-form')
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
