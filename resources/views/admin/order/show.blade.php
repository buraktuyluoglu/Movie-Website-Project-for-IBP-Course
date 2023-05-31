@extends("layouts.admin")
@section("content")
    <div class="row">
        <a href="{{route('admin.order.index')}}" type="button" class="btn btn-block bg-gradient-primary btn-sm w-25 my-3">Back To Orders</a>
    </div>
    <table class="table table-bordered table-dark table-hover">
        <tr>
            <th>ID</th>
            <td>{{ $order->id }}</td>
        </tr>
        <tr>
            <th>Total Price</th>
            <td>{{ $order->total_price }}</td>
        </tr>
        <tr>
            <th>User ID</th>
            <td>{{ $order->user_id }}</td>
        </tr>
        <tr>
            <th>Code</th>
            <td>{{ $order->code }}</td>
        </tr>
        <tr>
            <th>Status</th>
            <td>{{ $order->status }}</td>
        </tr>
        <tr>
            <th>Created At</th>
            <td>{{ $order->created_at }}</td>
        </tr>
        <tr>
            <th>Updated At</th>
            <td>{{ $order->updated_at }}</td>
        </tr>
    </table>

    <table class="table table-bordered table-dark table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>Price</th>
            <th>Name</th>
            <th>Description</th>
            <th>Address</th>
            <th>Rooms</th>
            <th>Position</th>
        </tr>
        </thead>
        <tbody>
        @foreach($order->orderItems as $orderItem)
            <tr>
                <td>{{ $orderItem->id }}</td>
                <td>{{ $orderItem->price }}</td>
                <td>{{ $orderItem->name }}</td>
                <td>{{ $orderItem->description }}</td>
                <td>{{ $orderItem->address }}</td>
                <td>{{ $orderItem->rooms }}</td>
                <td>{{ $orderItem->position }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
