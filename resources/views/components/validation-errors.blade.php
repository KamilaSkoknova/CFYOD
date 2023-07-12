@if ($errors->any())
    <div {{ $attributes }}>
        <div class="red mt-4 ms-1">{{ __('Whoops! Something went wrong.') }}</div>

        <ul class="my-2">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
