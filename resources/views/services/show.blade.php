@section('title', 'Service |')
<x-guest-layout>
    <div class="container height-whole">
        <div class="services-where">
            <div class="row mt-5">

                <div class="col-12 d-flex justify-content-between my-2">
                    @if ($service->user->id == Auth::id())
                    <div class="d-flex">
                        <a href="{{ route('services.edit', $service->slug) }}" class="btn btn-dark px-3 me-2">Edit</a>
                        <form action="{{ route('services.destroy', $service) }}" method="POST">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger px-3" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </div>
                    @endif
                </div>

                <div class="col-12 col-lg-9">
                    @if(session('success'))
                    <div class="bg-white mb-3">
                        <i class="bi bi-check2-square ms-3 me-1 py-5" style="color: red; font-size: 20px"></i>{{ session('success') }}
                    </div>
                    @endif

                    <div class="service-item">

                        <div class="service-item__image my-3">
                            <img src="{{ $service->picture_path }}" alt="{{ $service->title }}" class="img-fluid">
                        </div>

                        <div class="service-item__title">
                            <h1>{{ $service->title }}</h1>
                        </div>
                        <div class="service-item__available my-3">
                            <span class="bg-red-light"> {{ $service->available }}</span>
                        </div>
                        <div class="service-item__text mt-3">
                            <p> {{ $service->more_info }}</p>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="author-sidebar mt-3">
                        <img src="{{ $service->user->profile_photo_path }}" alt="{{ $service->user->name }}" class="img-fluid">
                        <h5 class="mt-3">{{ $service->user->name }}</h5> 
                        <p class="my-3">{{ $service->user->about_me }}</p>
                        @auth
                            <a href="#new-order" class="btn-service">Order</a>
                        @endauth
                        @guest
                            <h5 class="red">You need to be registered to hire.</h5>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </div>
    @auth
        <div class="bg-green-light">
            <div class="container recipes-fp" id="new-order">
                <div class="recipes-where">
                    <div class="row">
                        <div class="col-12">
                            <h4>Create New Order</h4>
                        </div>
                        <div class="col-12 mt-3">
                            <form action="{{ route('orders.store') }}" method="POST">
                                @csrf
                                @error('order_title')
                                    {{ $message }}
                                @enderror
                                <input type="text" name="order_title" id="order_title" value="{{ $service->title }}" class="form-control mb-2" readonly>
                                @error('details_location')
                                    {{ $message }}
                                @enderror
                                <input type="text" name="details_location" id="details_location" placeholder="Where (adress)" class="form-control mb-2">
                                @error('details_time')
                                    {{ $message }}
                                @enderror
                                <input type="datetime-local" name="details_time" id="details_time" placeholder="When (date and hour)" class="form-control mb-2">
                                @error('details_concrete')
                                    {{ $message }}
                                @enderror
                                <textarea rows="3" name="details_concrete" id="details_concrete" placeholder="Details..." class="form-control mb-2"></textarea>
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                                        @error('price')
                                            {{ $message }}
                                        @enderror
                                        <input type="number" name="price" id="price" placeholder="€" class="form-control mb-2">
                                    </div>
                                </div>
        
                                <button type="submit" class="btn btn-danger px-3">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endauth
</x-guest-layout>