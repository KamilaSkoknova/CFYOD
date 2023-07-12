@section('title', 'Recipes |')
<x-guest-layout>
    <div class="container recipes-fp">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between">
                    <div class="recipes-fp__header">
                        <h2 class="mb-3">Recipes</h2>
                        <h4 class="my-4"><small>></small> newest</h4>
                    </div>
                    <div>
                        @auth
                            <a href="{{ route('recipes.create') }}" class="btn btn-dark px-3">Create</a>
                        @endauth
                    </div>
                </div>
                <div class="row">
                    @foreach ($recipes as $recipe)
                    <div class="col-12 col-md-6 col-lg-3">
                        <a href="{{ route('recipes.show', $recipe->slug) }}">
                            <div class="recipes-fp__recipe">
                                <div class="recipes-fp__recipe--img">
                                    <img src="{{ $recipe->image_path }}" alt="{{ $recipe->title }}" class="img-fluid">
                                </div>
                                <div class="recipes-fp__recipe--text">
                                    <h5 class="py-2 ps-3">{{ $recipe->title }}</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                    <div class="col-12 mt-3">
                        {{ $recipes->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
