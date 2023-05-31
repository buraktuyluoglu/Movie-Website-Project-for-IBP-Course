@extends("layouts.home")
@section("content")
    <div class="container p-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Payment Success</div>

                    <div class="card-body">
                        <h3>Your payment was successful!</h3>
                        <p>Thank you for your purchase.</p>

                        <a href="{{route('profile.edit')}}" class="btn btn-primary">Go to My Orders</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
