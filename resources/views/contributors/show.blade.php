@section('title', 'Contributor |')
<x-guest-layout>
    <div class="container-fluid bg-green-light contributors-fp">
        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2">
                @if(session('success'))
                <div class="bg-white mb-3">
                    <i class="bi bi-check2-square ms-3 me-1 py-5" style="color: red; font-size: 20px"></i>{{ session('success') }}
                </div>
                @endif

                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4">
                        @if( $contributor->profile_photo_path == '' )
                        @php
                        $picture = '/assets/img/chef-hat.png';
                        @endphp
                        @else
                        @php
                        $picture = $contributor->profile_photo_path;
                        @endphp
                        @endif
                        <img src="{{ $picture }}" alt="{{ $contributor->name }}" class="img-fluid">
                    </div>
                    <div class="col-12 col-md-6 col-lg-8">
                        <div class="ps-lg-3">
                            <h1 class="mt-3">{{ $contributor->name }}</h1>
                            <h4>{{ $contributor->about_me }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-5">
            <div class="recipes-fp__header">
                <h2 class="mb-3">Recipes</h2>
                <h4 class="my-4"><small>></small> newest</h4>
            </div>
            @forelse ( $contributor->recipes as $recipe)
                <div class="col-12 col-md-6 col-lg-3 mb-5">
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
                <div class="col-12 mb-5">
                    <h5 class="text-center red">This Cook has no recipe yet.</h5>
                </div>
            @endforelse
        </div>
    </div> 
</x-guest-layout>