<div class="row py-5" id="my_recipes">
    <h2>My recipes</h2>
    @forelse ( $recipes as $recipe )
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
    @empty 
        <div class="bg-red-light p-4 mt-3">
            <h5 class="text-center white mb-2">You have no recipe yet.</h5>
            <a href="{{ route('recipes.create') }}" class="btn btn-dark px-3">Create</a>
        </div>
    @endforelse
    <div class="col-12 mt-3">
        {{ $services->links('pagination::bootstrap-5') }}
    </div>
</div>