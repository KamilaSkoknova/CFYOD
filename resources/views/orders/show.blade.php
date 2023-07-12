@section('title', 'Order |')
<x-app-layout>
    <div class="container orders-fp height-whole">
        <div class="row">
            <div class="col-12">
                <h4 class="text-center">Order #{{ $order->id }}</h4>
                <p class="py-2 ps-3"><strong>Subject:</strong> {{ $order->order_title }}</p>
                <p class="py-2 ps-3"><strong>Location:</strong> {{ $order->details_location }}</p>
                <p class="py-2 ps-3"><strong>Date:</strong> {{ $order->details_time }}</p>
                <p class="py-2 ps-3"><strong>Price:</strong> {{ $order->price }} €</p>
                <p class="py-2 ps-3"><strong>Details:</strong> {{ $order->details_concrete }}</p>
                <p class="py-2 ps-3"><strong>Cook:</strong> {{ $order->user->name }}</p>
                <p class="py-2 ps-3"><strong>Created at:</strong> {{ $order->created_at }}</p>
            </div>
        </div>
    </div>
</x-app-layout>