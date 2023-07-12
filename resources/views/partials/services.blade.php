<div class="row py-5" id="my_services">
    <h2>My services</h2>
    @forelse ( $services as $service )
        <div class="col-12 col-md-6 col-lg-3">
            <a href="{{ route('services.show', $service->slug) }}">
                <div class="recipes-fp__recipe">
                    <div class="recipes-fp__recipe--img">
                        <img src="{{ $service->picture_path }}" alt="{{ $service->title }}" class="img-fluid">
                    </div>
                    <div class="recipes-fp__recipe--text">
                        <h5 class="py-2 ps-3">{{ $service->title }}</h5>
                    </div>
                </div>
            </a>
        </div>
    @empty 
        <div class="bg-red-light p-4 mt-3">
            <h5 class="text-center white mb-2">You offer no service yet.</h5>
            <a href="{{ route('services.create') }}" class="btn btn-dark px-3">Create</a>
        </div>
    @endforelse
    <div class="col-12 mt-3">
        {{ $services->links('pagination::bootstrap-5') }}
    </div>
</div>