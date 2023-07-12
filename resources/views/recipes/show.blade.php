@section('title', 'Recipe |')
<x-guest-layout>
    <div class="container">
        <div class="recipes-where">
            <div class="row mt-5">
                <div class="col-12 d-flex justify-content-between my-2">
                    <div class="d-flex">
                        @if ($recipe->user->id == Auth::id())
                            <a href="{{ route('recipes.edit', $recipe->slug) }}" class="btn btn-dark px-3 mx-2">Edit</a>
                            <form action="{{ route('recipes.destroy', $recipe) }}" method="POST">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger px-3" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        @endif
                    </div>
                </div>
                <div class="col-12 col-lg-9">
                    @if(session('success'))
                    <div class="bg-white mb-3">
                        <i class="bi bi-check2-square ms-3 me-1 py-5" style="color: red; font-size: 20px"></i>{{ session('success') }}
                    </div>
                    @endif
                    <div class="recipe-item-whole">
                        <div class="rerecipe-item-whole__image my-3">
                            <img src="{{ $recipe->image_path }}" alt="{{ $recipe->title }}" class="img-fluid">
                        </div>
                        <div class="recipe-item-whole__info">
                            <p> Created: {{ $recipe->created_at->diffForHumans() }}</p>
                        </div>
                        <div class="recipe-item-whole__main">
                            <div class="recipe-item-whole__main-title">
                                <h1>{{ $recipe->title }}</h1>
                            </div>
                            <div class="recipe-item-whole__main-extract">
                                <h6> {{ $recipe->extract }}</h6>
                            </div>
                            <div class="recipe-item-whole__main-text">
                                <p> {{ $recipe->text }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="recepist-sidebar bg-green-light white">
                        <img src="{{ $recipe->user->profile_photo_path }}" alt="{{ $recipe->user->name }}" class="img-fluid">
                        <h5 class="mt-2">{{ $recipe->user->name }}</h5> 
                        <p>{{ $recipe->user->about_me }}</p>
                        <div class="recepist-sidebar__cook">
                            @if ($recipe->user->role == '1')
                            <hr>
                            <h5><a href="{{ route('cooks.show', $recipe->user->name) }}">works as Cook</a></h5>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</x-guest-layout>