<div class="row py-5" id="my_orders">
    <h2>My orders</h2>
    @if (count($orders) > 0)
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Price</th>
                <th scope="col">Subject with link</th>
                <th scope="col">Created at</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
            <tr>
                <th>{{ $order->price }} €</th>
                <td><a href="{{ route('orders.show', $order->id) }}">{{ $order->order_title }}</a></td>
                <td>{{ $order->created_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <div class="bg-red-light p-4 mt-3">
        <h5 class="text-center white mb-2">You have no order yet.</h5>
    </div>
    @endif
    <div class="col-12 mt-3">
        {{ $services->links('pagination::bootstrap-5') }}
    </div>
</div>