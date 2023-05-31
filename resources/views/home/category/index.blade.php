
@extends("layouts.home")
@section("content")
    <section class="section section--bg mt-5" data-bg="{{asset('home')}}/img/section/section.jpg" style="background: url(&quot;{{asset('home')}}/img/section/section.jpg&quot;) center center / cover no-repeat;">
        <div class="container">
            <div class="row">
                <!-- section title -->
                <div class="col-12">
                    <h2 class="section__title">Categories</h2>
                </div>
                <style>
                    .card__play{
                        opacity:1;

                    }
                    .card__cover:before {
                        opacity: 0.25;
                    }
                </style>
                <!-- end section title -->
                @foreach($categories as $category)
                <!-- card -->
                <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                    <div class="card">
                        <div class="card__cover" style="background:black;">
                            <img src="{{Storage::url($category->image)}}" alt="">

                            <a href="#" class="card__play" style="border:none;text-align: center">
                                {{$category->title}} <br/>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- end card -->
                @endforeach

            </div>
        </div>
    </section>
@endsection
