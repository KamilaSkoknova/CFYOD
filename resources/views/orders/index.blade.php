@section('title', 'Orders |')
<x-app-layout>
    <div class="container orders-fp height-whole">
        <div class="row">
            <div class="col-12">
                <div class="orders-fp__header">
                    <h2 class="mb-3">Orders</h2>
                    <h4 class="my-4"><small>></small> newest</h4>
                </div>
                <div class="row">
                    <div class="col-12">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Price</th>
                                    <th scope="col">Subject with link</th>
                                    <th scope="col">Order by</th>
                                    <th scope="col">Created at</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                <tr>
                                    <th>{{ $order->price }} €</th>
                                    <td><a href="{{ route('orders.show', $order->id) }}">{{ $order->order_title }}</a></td>
                                    <td>{{ $order->user->name }}</td>
                                    <td>{{ $order->created_at }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-12 mt-3">
                        {{ $orders->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
