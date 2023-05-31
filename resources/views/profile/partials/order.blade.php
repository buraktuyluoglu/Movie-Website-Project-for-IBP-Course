<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 p-5">
            <div class="card">
                <div class="card-header">My Orders</div>

                <div class="card-body">
                    <h3>My Orders</h3>

                    @if ($orders->isEmpty())
                        <p>You have no orders yet.</p>
                    @else
                        <table class="table table-bordered ">
                            <thead>
                            <tr>
                                <th>Order Code</th>
                                <th>Total Amount</th>
                                <th>Order Date</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($orders as $order)
                                <tr>
                                    <td>{{ $order->code }}</td>
                                    <td>{{ $order->total_price }}₺</td>
                                    <td>{{ $order->created_at }}</td>
                                    <td><a class="btn btn-primary"
                                        href="{{route('order.show',['id' => $order->id])}}"
                                        >Details</a> </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
