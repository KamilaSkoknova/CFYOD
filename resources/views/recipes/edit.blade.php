@section('title', 'Edit Recipe |')
<x-app-layout>
    <div class="container recipes-fp">
        <div class="recipes-where">
            <div class="row">
                <div class="col-12">
                    <h4>Edit Recipe</h4>
                </div>
                <div class="col-12 mt-3">
                    <form action="{{ route('recipes.update', $recipe) }}" method="POST" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        @error('title')
                            {{ $message }}
                        @enderror
                        <input type="text" name="title" id="title" placeholder="(Maximum: 200 chars) Title" class="form-control mb-2" value="{{ $recipe->title }}">
                        @error('image_path')
                            {{ $message }}
                        @enderror
                        <input type="file" name="image_path" id="image_path" class="form-control mb-2">
                        @error('extract')
                            {{ $message }}
                        @enderror
                        <textarea rows="3" name="extract" id="extract" placeholder="The most important info" class="form-control mb-2">{{ $recipe->extract }}</textarea>
                        @error('text')
                            {{ $message }}
                        @enderror
                        <textarea rows="10" name="text" id="text" placeholder="The recipe alone" class="form-control mb-2">{{ $recipe->text }}</textarea>

                        <button type="submit" class="btn btn-danger px-3">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


