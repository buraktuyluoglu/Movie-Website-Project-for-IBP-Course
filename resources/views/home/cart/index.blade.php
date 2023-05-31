@extends("layouts.home")
@section("content")
    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cart-table">
                        <table>
                            <thead>
                            <tr>
                                <th>Image</th>
                                <th class="p-name">Product Name</th>
                                <th>Price</th>
                                <th><i class="ti-close"></i></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($cartItems as $cart)
                            <tr>
                                <td class="cart-pic first-row"><img src="{{Storage::url($cart->property->card_img)}}" alt=""></td>
                                <td class="cart-title first-row">
                                    <h5>{{$cart->property->title}}</h5>
                                </td>
                                <td class="p-price first-row">{{$cart->property->low_price}}₺</td>
                                <td class="close-td first-row">
                                    <form action="{{route('cart.delete')}}" method="post">
                                        @csrf
                                        @method("DELETE")
                                        <input type="hidden" name="cart_item_id" value="{{$cart->id}}" />
                                        <button class="btn btn-warning" type="submit"><i class="ti-close"></i></button>
                                    </form>
                                  </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row">

                        <div class="col-lg-4 offset-lg-4">
                            <div class="proceed-checkout">
                                <ul>
                                    <li class="subtotal">Subtotal <span>{{$totalPrice}}₺</span></li>
                                    <li class="cart-total">Total with Tax <span>{{$totalPriceWithTax}}₺</span></li>
                                </ul>
                                <a href="{{route('cart.checkout')}}" class="proceed-btn">PROCEED TO CHECK OUT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->
@endsection
