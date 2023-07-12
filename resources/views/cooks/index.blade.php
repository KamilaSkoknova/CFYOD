@section('title', 'Cooks |')
<x-guest-layout>
    <div class="container recipes-fp">
        <div class="row">
            <div class="col-12">
                <div class="recipes-fp__header">
                    <h2 class="mb-3">Cooks</h2>
                    <h4 class="my-4"><small>></small> newest</h4>
                </div>
                <div class="row justify-content-center">
                    @foreach ($cooks as $cook)
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="cooks-fp__cook">
                            <div class="cooks-fp__cook--img">
                                @if( $cook->profile_photo_path == '' )
                                    @php
                                    $picture = '/assets/img/chef-hat.png';
                                    @endphp
                                    @else
                                    @php
                                    $picture = $cook->profile_photo_path;
                                    @endphp
                                    @endif
                                <img src="{{ $picture }}" alt=" {{ $cook->name }}" class="img-fluid">
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
                    <div class="col-12 mt-3">
                        {{ $cooks->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
