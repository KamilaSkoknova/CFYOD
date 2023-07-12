@section('title', 'Edit Service |')
<x-app-layout>
    <div class="container recipes-fp">
        <div class="recipes-where">
            <div class="row">
                <div class="col-12">
                    <h4>Edit Service</h4>
                </div>
                <div class="col-12 mt-3">
                    <form action="{{ route('services.update', $service) }}" method="POST" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        @error('title')
                            {{ $message }}
                        @enderror
                        <input type="text" name="title" id="title" placeholder="(Maximum: 200 chars) Title" class="form-control mb-2" value="{{ $service->title }}">
                        @error('picture_path')
                            {{ $message }}
                        @enderror
                        <input type="file" name="picture_path" id="picture_path" class="form-control mb-2">
                        @error('available')
                            {{ $message }}
                        @enderror
                        <textarea rows="3" name="available" id="available" placeholder="My availability" class="form-control mb-2">{{ $service->available }}</textarea>
                        @error('more_info')
                            {{ $message }}
                        @enderror
                        <textarea rows="10" name="more_info" id="more_info" placeholder="More info about this service" class="form-control mb-2">{{ $service->more_info }}</textarea>

                        <button type="submit" class="btn btn-danger px-3">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>