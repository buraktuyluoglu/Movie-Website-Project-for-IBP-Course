@extends('layouts.home')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 p-5">
                <div class="card">
                    <div class="card-header">Order Details</div>

                    <div class="card-body">
                        <h3>Order Details</h3>
                        <p><strong>Order Code:</strong> {{ $order->code }}</p>
                        <p><strong>Total Amount:</strong> {{ $order->total_price }}₺</p>
                        <p><strong>Order Date:</strong> {{ $order->created_at }}</p>

                        <h4>Order Items:</h4>
                        @if (!isset($order->orderItems))
                            <p>No items found in this order.</p>
                        @else
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($order->orderItems as $item)
                                    <tr>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->price }}₺</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center p-5">
            <a  href="{{route('profile.edit')}}" class="btn btn-warning">Back To Profile</a>
        </div>
    </div>
@endsection
