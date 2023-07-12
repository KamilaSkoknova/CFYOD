@section('title', 'Dashboard |')
<x-app-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-2 bg-green-light">
                <aside class="pt-5 height-whole position-fixed">
                    <ul>
                        <li><h5 class="mb-4"><a href="#news">News</a></h5></li>
                        <li><h5 class="mb-4"><a href="#my_recipes">My recipes</a></h5></li>

                        @if ($user->role == '1' || $user->role == '5')
                            <li><h5 class="mb-4"><a href="#my_orders">My orders</a></h5></li>
                            <li><h5 class="mb-4"><a href="#my_services">My services</a></h5></li>
                        @endif
                        @if ($user->role == '1')
                            <!-- ešte urobiť -->
                            <li><h5 class="mb-4"><a href="#">Working as Cook</a></h5></li>
                        @endif
                    </ul>
                </aside>
            </div>
            <div class="col-12 col-lg-8 offset-lg-1 padding-section">
                <div class="row">
                    <div class="col-12 col-lg-11 pt-5" id="news">
                        <div class="dashboard-page" >
                            @include('components.welcome')
                        </div>
                    </div>
                </div>
                @include('partials/recipes')
                @include('partials/orders')
                @include('partials/services')
            </div>
        </div>
    </div>
</x-app-layout>
