@extends("layouts.home")
@section("content")
   <div class="container p-5">
       <div class="row">
           <div class="col-lg-6">
               <div class="product-pic-zoom">
                   <img class="product-big-img" src="{{Storage::url($property->card_img)}}" alt="">
                   <div class="zoom-icon">
                       <i class="fa fa-search-plus"></i>
                   </div>
               </div>
               <div class="product-thumbs">
                   <div class="product-thumbs-track ps-slider owl-carousel">
                       @foreach($property->gallery as $img)
                       <div class="pt active" data-imgbigurl="{{Storage::url($img->image)}}"><img
                               src="{{Storage::url($img->image)}}" alt=""></div>
                       @endforeach
                   </div>
               </div>
           </div>
           <div class="col-lg-6">
               <div class="product-details">
                   <div class="pd-title">
                       <span>{{$property->category->title}}</span>
                       <h3>{{$property->title}}</h3>
                   </div>
                   <div class="pd-desc">
                       <p>{{$property->description}}</p>
                       <h4>{{$property->low_price}} ₺ <span>{{$property->high_price}} ₺</span></h4>
                   </div>
                   <div class="quantity">
                       <form method="post" action="{{route('cart.store')}}">
                           @csrf
                            <input type="hidden" name="property_id" value="{{$property->id}}"/>
                           <button type="submit" class="primary-btn pd-cart border-0">Add To Cart</button>
                       </form>

                   </div>
                   <ul class="pd-tags">
                       <li><span>CATEGORIES</span>:{{$property->category->title}} </li>
                   </ul>
                   <div class="pd-share">
                       <div class="p-code">Sku : 00012</div>
                       <div class="pd-social">
                           <a href="#"><i class="ti-facebook"></i></a>
                           <a href="#"><i class="ti-twitter-alt"></i></a>
                           <a href="#"><i class="ti-linkedin"></i></a>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>

@endsection
