<x-guest-layout>
    <div class="container-fluid magnet-green d-flex align-items-center">
        <div class="magnet-green__title">
            <h1 class="text-canter">Cook for yourself</h1>
        </div>
    </div>
    <div class="container-fluid magnet-red d-flex align-items-center">
        <div class="magnet-red__title">
            <h1 class="text-center">or don't</h1>
        </div>
    </div>
    <div class="container recipes-fp">
        <div class="row">
            <div class="col-12">
                <div class="recipes-fp__header">
                    <h2 class="mb-3">Recipes</h2>
                    <h4 class="my-4"><small>></small> newest</h4>
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
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid cooks-fp">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cooks-fp__header">
                        <h2 class="mb-3">Cooks</h2>
                        <h4 class="my-4"><small>></small> newest</h4>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach ($cooks as $cook)
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="cooks-fp__cook">
                        <div class="cooks-fp__cook--img">
                            <img src="{{ $cook->profile_photo_path }}" alt="{{ $cook->name }}" class="img-fluid">
                        </div>
                        <div class="cooks-fp__cook--hats">
                            <a href="{{ route('cooks.show', $cook->name) }}" class="btn btn-danger">Show more</a>
                        </div>
                        <div class="cooks-fp__cook--text">
                            <h5>{{ $cook->name }}</h5>
                            <p>{{ $cook->about_me }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-guest-layout>
