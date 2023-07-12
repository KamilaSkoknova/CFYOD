<nav class="navbar navbar-expand-lg navbar-dark bg-green">
  <div class="container-fluid">
    <a class="navbar-brand" href="/"><img src="{{ asset('assets/img/logo.jpg') }}" alt="Cook for yourself or not" class="navbar-brand-img"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/recipes">Recipes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/cooks">Cooks</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/how-this-works">How this works</a>
        </li>
      </ul>
      @if (Route::has('login'))
        <div class="d-flex auth-hrefs">
            @auth
                <a href="{{ url('/dashboard') }}" class="me-2">Dashboard</a>
                @include('navigation-menu')
            @else
                <a href="{{ route('login') }}" class="me-2">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
      @endif
    </div>
  </div>
</nav>