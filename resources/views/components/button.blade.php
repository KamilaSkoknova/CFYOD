<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-danger mt-2 px-4']) }}>
    {{ $slot }}
</button>
