@props(['id' => null, 'maxWidth' => null])

<x-modal :id="$id" :maxWidth="$maxWidth" {{ $attributes }}>
    <div class="container">
        <div class="row">
            <div class="col-10 offset-1">
                <div class="mt-3">
                    <h3 class="mb-2">
                        {{ $title }}
                    </h3>
    
                    <div class="lead">
                        {{ $content }}
                    </div>
                </div>
            </div>
        </div>

    {{ $footer }}

</x-modal>
