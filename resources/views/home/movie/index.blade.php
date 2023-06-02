
@extends("layouts.home")
@section("content")
    <section class="section section--bg mt-5" data-bg="{{asset('home')}}/img/section/section.jpg" style="background: url(&quot;{{asset('home')}}/img/section/section.jpg&quot;) center center / cover no-repeat;">
        <div class="container">
            <div class="row">
                <!-- section title -->
                <div class="col-12">
                    <h2 class="section__title">Filmler</h2>
                </div>

                <!-- catalog -->
                <div class="catalog">
                    <div class="container">
                        <div class="row">
                            @foreach($movieList as $movie)
                                <!-- card -->
                                <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                                    <div class="card">
                                        <div class="card__cover">
                                            <img src="{{Storage::url($movie->image)}}" alt="">
                                            <a href="{{route('home.movie_show',['id' => $movie->id])}}" class="card__play">
                                                <i class="icon ion-ios-play"></i>
                                            </a>
                                        </div>
                                        <div class="card__content">
                                            <h3 class="card__title"><a href="{{route('home.movie_show',['id' => $movie->id])}}">{{$movie->name}}</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card -->
                            @endforeach
                            <!-- paginator -->
                          <style>
                              .page-item{
                                  font-size:18px;
                              }
                            .page-link{
                                color:#ededed;

                            }
                            .active .page-link{
                                color:#ff5695 !important;
                            }
                          </style>

                                <div class="row">
                                    {{$movieList->links()}}
                                </div>

                            <!-- end paginator -->
                        </div>
                    </div>
                </div>
                <!-- end catalog -->


            </div>
        </div>
    </section>
@endsection
