<nav class="d-flex">
    <x-slot name="content">
    <x-dropdown-link href="{{ route('profile.show') }}" class="me-2">
        {{ __('Profile') }}
    </x-dropdown-link>
    <form method="POST" action="{{ route('logout') }}" x-data>
        @csrf

        <x-dropdown-link href="{{ route('logout') }}"
                    @click.prevent="$root.submit();">
            {{ __('Log Out') }}
        </x-dropdown-link>
    </form>
</nav>
