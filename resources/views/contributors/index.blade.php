@section('title', 'Contributors |')
<x-guest-layout>
    <div class="container contributors-fp">
        <div class="row">
            <div class="col-12">
                <div class="contributors-fp__header" >
                    <h2 class="mb-3">Contributors</h2>
                    <h4 class="my-4"><small>></small> newest</h4>
                </div>
                <div class="row">
                    @foreach ($contributors as $contributor)
                    <div class="col-12 col-md-6 col-lg-3">
                        <a href="{{ route('contributors.show', $contributor->name) }}">
                            <div class="contributors-fp__contributor">
                                <div class="contributors-fp__contributor--img">
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
                                <div class="contributors-fp__contributor--text">
                                    <h5 class="py-2 ps-3">{{ $contributor->name }}</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                    <div class="col-12 mt-3">
                        {{ $contributors->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>