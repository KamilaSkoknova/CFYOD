@section('title', 'Services |')
<x-guest-layout>
    <div class="container services-fp">
        <div class="row">
            <div class="col-12">
                <div class="services-fp__header">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h2 class="mb-3">Services</h2>
                            <h4 class="my-4"><small>></small> newest</h4>
                        </div>
                        <div>
                            @auth
                                <a href="{{ route('services.create') }}" class="btn btn-dark px-3">Create</a>
                            @endauth
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($services as $service)
                    <div class="col-12 col-md-6 col-lg-3">
                        <a href="{{ route('services.show', $service->slug) }}">
                            <div class="services-fp__service">
                                <div class="services-fp__service--img">
                                    <img src="{{ $service->picture_path }}" alt="{{ $service->title }}" class="img-fluid">
                                </div>
                                <div class="services-fp__service--text">
                                    <h5 class="py-2 ps-3">{{ $service->title }}</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                    <div class="col-12 mt-3">
                        {{ $services->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>