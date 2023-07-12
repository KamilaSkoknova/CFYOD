<div>
    @php
        $id = Auth::id();
    @endphp
    <h1 class="">
        Hi {{ $user->name }},
    </h1>

    <p class="">
        <strong>Short welcoming and what is new</strong><br>
        Praesent auctor urna nisi, quis ultrices tellus molestie hendrerit. Nam ante diam, mollis id viverra at, 
        mollis consequat nunc. Pellentesque vel leo libero. Suspendisse faucibus ultrices sem. Integer posuere 
        facilisis risus at bibendum. Curabitur nec erat elit. Mauris congue magna ac nibh bibendum, sit amet maximus 
        sem finibus. Praesent scelerisque, mi ac aliquet tincidunt, massa libero lobortis augue, ut interdum nunc ex eget magna. 
        Duis ut rhoncus sem, id faucibus enim. Duis eu nisi vulputate, dictum nisi eu, efficitur metus. Vestibulum dictum eros et 
        velit varius, non pretium risus lobortis. Integer fringilla enim eget lacus tempor feugiat. Nunc nec nibh in nisi dapibus 
        sollicitudin non sit amet augue.
    </p>

    <div class="my-5">
        <a href="{{ route('recipes.create') }}" class="btn btn-dark px-3">Create new recipe</a>
    </div>

    <p><strong>Ešte chýba:</strong></p>
    Podľa rolí: [1] - cooks
    <ol>
        <li><strong>vlastné objednávky - ako kuchár</strong></li>
    </ol>

    Podľa rolí: [5] - main admin
    <ol>
        <li><strong>+ vyhľadávanie alebo kategorizácia</strong></li>
    </ol>

    @if ($user->role == '0')
    <form action="{{ route('cooks.update', $id) }}" method="POST">
        @method('put')
        @csrf
        <button type="submit" class="btn btn-danger px-3" onclick="return confirm('Are you sure?')">I wanna work as Cook</button>
    </form>
    @endif

</div>

