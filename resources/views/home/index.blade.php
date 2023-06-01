@extends("layouts.home")
@section("content")
    <!-- home -->
    <section class="home">
        <!-- home bg -->
        <div class="owl-carousel home__bg">
            <div class="item home__cover" data-bg="{{asset('home')}}/img/home/home__bg.jpg"></div>
            <div class="item home__cover" data-bg="{{asset('home')}}/img/home/home__bg2.jpg"></div>
            <div class="item home__cover" data-bg="{{asset('home')}}/img/home/home__bg3.jpg"></div>
            <div class="item home__cover" data-bg="{{asset('home')}}/img/home/home__bg4.jpg"></div>
        </div>
        <!-- end home bg -->

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="home__title"><b>LAST UPLOADED</b> OF THIS SEASON</h1>

                    <button class="home__nav home__nav--prev" type="button">
                        <i class="icon ion-ios-arrow-round-back"></i>
                    </button>
                    <button class="home__nav home__nav--next" type="button">
                        <i class="icon ion-ios-arrow-round-forward"></i>
                    </button>
                </div>

                <div class="col-12">
                    <div class="owl-carousel home__carousel">
                        @foreach($movies as $movie)
                        <div class="item">
                            <!-- card -->
                            <div class="card card--big">
                                <div class="card__cover">
                                    <img src="{{Storage::url($movie->image)}}" alt="">
                                    <a href="{{route('home.movie_show',['id' => $movie->id])}}" class="card__play">
                                        <i class="icon ion-ios-play"></i>
                                    </a>
                                </div>
                                <div class="card__content">
                                    <h3 class="card__title"><a href="#">{{$movie->name}}</a></h3>
                                    <span class="card__category">
										<a href="#">{{$movie->category->title}}</a>
									</span>
                                    <span class="card__rate"><i class="icon ion-ios-star"></i>8.4</span>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end home -->

    <!-- content -->
    <section class="content">
        <div class="content__head">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- content title -->
                        <h2 class="content__title">New items</h2>
                        <!-- end content title -->

                        <!-- content tabs nav -->
                        <ul class="nav nav-tabs content__tabs" id="content__tabs" role="tablist">
                            @foreach($categories as $category)
                            <li class="nav-item">
                                <a class="nav-link @once active @endonce"
                                   data-toggle="tab" href="#tab-{{$loop->index}}"
                                   role="tab" aria-controls="tab-{{$loop->index}}" aria-selected="true">{{$category->title}}</a>
                            </li>
                            @endforeach
                        </ul>
                        <!-- end content tabs nav -->

                        <!-- content mobile tabs nav -->
                        <div class="content__mobile-tabs" id="content__mobile-tabs">
                            <div class="content__mobile-tabs-btn dropdown-toggle" role="navigation" id="mobile-tabs" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <input type="button" value="New items">
                                <span></span>
                            </div>

                            <div class="content__mobile-tabs-menu dropdown-menu" aria-labelledby="mobile-tabs">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item"><a class="nav-link active" id="1-tab" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">NEW RELEASES</a></li>

                                    <li class="nav-item"><a class="nav-link" id="2-tab" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">MOVIES</a></li>

                                    <li class="nav-item"><a class="nav-link" id="3-tab" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">TV SERIES</a></li>

                                    <li class="nav-item"><a class="nav-link" id="4-tab" data-toggle="tab" href="#tab-4" role="tab" aria-controls="tab-4" aria-selected="false">CARTOONS</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- end content mobile tabs nav -->
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <!-- content tabs -->
            <div class="tab-content" id="myTabContent">
                @foreach($categories as $category)
                <div class="tab-pane fade @once show active @endonce" id="tab-{{$loop->index}}" role="tabpanel" aria-labelledby="{{$loop->index}}-tab">
                    <div class="row">

                       @foreach($category->movies as $movie)
                        <div class="col-6 col-sm-12 col-lg-6">
                            <div class="card card--list">
                                <div class="row">
                                    <div class="col-12 col-sm-4">
                                        <div class="card__cover">
                                            <img src="{{Storage::url($movie->image)}}" alt="">
                                            <a href="{{route('home.movie_show',['id' => $movie->id])}}" class="card__play">
                                                <i class="icon ion-ios-play"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-8">
                                        <div class="card__content">
                                            <h3 class="card__title"><a href="#">{{$movie->name}}</a></h3>
                                            <span class="card__category">
												<a href="#">{{$movie->category->title}}</a>
											</span>

                                            <div class="card__wrap">
                                                <span class="card__rate"><i class="icon ion-ios-star"></i>8.4</span>

                                                <ul class="card__list">
                                                    <li>HD</li>
                                                    <li>16+</li>
                                                </ul>
                                            </div>

                                            <div class="card__description">
                                                <p>{{$movie->descriptions}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach


                    </div>
                </div>
                @endforeach
            </div>
            <!-- end content tabs -->
        </div>
    </section>
    <!-- end content -->

    <!-- expected premiere -->
    <section class="section section--bg" data-bg="{{asset('home')}}/img/section/section.jpg">
        <div class="container">
            <div class="row">
                <!-- section title -->
                <div class="col-12">
                    <h2 class="section__title">Expected premiere</h2>
                </div>
                <!-- end section title -->

                <!-- card -->
                <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                    <div class="card">
                        <div class="card__cover">
                            <img src="{{asset('home')}}/img/covers/cover.jpg" alt="">
                            <a href="#" class="card__play">
                                <i class="icon ion-ios-play"></i>
                            </a>
                        </div>
                        <div class="card__content">
                            <h3 class="card__title"><a href="#">I Dream in Another Language</a></h3>
                            <span class="card__category">
								<a href="#">Action</a>
								<a href="#">Triler</a>
							</span>
                            <span class="card__rate"><i class="icon ion-ios-star"></i>8.4</span>
                        </div>
                    </div>
                </div>
                <!-- end card -->

                <!-- card -->
                <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                    <div class="card">
                        <div class="card__cover">
                            <img src="{{asset('home')}}/img/covers/cover3.jpg" alt="">
                            <a href="#" class="card__play">
                                <i class="icon ion-ios-play"></i>
                            </a>
                        </div>
                        <div class="card__content">
                            <h3 class="card__title"><a href="#">Benched</a></h3>
                            <span class="card__category">
								<a href="#">Comedy</a>
							</span>
                            <span class="card__rate"><i class="icon ion-ios-star"></i>7.1</span>
                        </div>
                    </div>
                </div>
                <!-- end card -->

                <!-- card -->
                <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                    <div class="card">
                        <div class="card__cover">
                            <img src="{{asset('home')}}/img/covers/cover2.jpg" alt="">
                            <a href="#" class="card__play">
                                <i class="icon ion-ios-play"></i>
                            </a>
                        </div>
                        <div class="card__content">
                            <h3 class="card__title"><a href="#">Whitney</a></h3>
                            <span class="card__category">
								<a href="#">Romance</a>
								<a href="#">Drama</a>
								<a href="#">Music</a>
							</span>
                            <span class="card__rate"><i class="icon ion-ios-star"></i>6.3</span>
                        </div>
                    </div>
                </div>
                <!-- end card -->

                <!-- card -->
                <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                    <div class="card">
                        <div class="card__cover">
                            <img src="{{asset('home')}}/img/covers/cover6.jpg" alt="">
                            <a href="#" class="card__play">
                                <i class="icon ion-ios-play"></i>
                            </a>
                        </div>
                        <div class="card__content">
                            <h3 class="card__title"><a href="#">Blindspotting</a></h3>
                            <span class="card__category">
								<a href="#">Comedy</a>
								<a href="#">Drama</a>
							</span>
                            <span class="card__rate"><i class="icon ion-ios-star"></i>7.9</span>
                        </div>
                    </div>
                </div>
                <!-- end card -->

                <!-- card -->
                <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                    <div class="card">
                        <div class="card__cover">
                            <img src="{{asset('home')}}/img/covers/cover4.jpg" alt="">
                            <a href="#" class="card__play">
                                <i class="icon ion-ios-play"></i>
                            </a>
                        </div>
                        <div class="card__content">
                            <h3 class="card__title"><a href="#">I Dream in Another Language</a></h3>
                            <span class="card__category">
								<a href="#">Action</a>
								<a href="#">Triler</a>
							</span>
                            <span class="card__rate"><i class="icon ion-ios-star"></i>8.4</span>
                        </div>
                    </div>
                </div>
                <!-- end card -->

                <!-- card -->
                <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                    <div class="card">
                        <div class="card__cover">
                            <img src="{{asset('home')}}/img/covers/cover5.jpg" alt="">
                            <a href="#" class="card__play">
                                <i class="icon ion-ios-play"></i>
                            </a>
                        </div>
                        <div class="card__content">
                            <h3 class="card__title"><a href="#">Benched</a></h3>
                            <span class="card__category">
								<a href="#">Comedy</a>
							</span>
                            <span class="card__rate"><i class="icon ion-ios-star"></i>7.1</span>
                        </div>
                    </div>
                </div>
                <!-- end card -->

                <!-- section btn -->
                <div class="col-12">
                    <a href="#" class="section__btn">Show more</a>
                </div>
                <!-- end section btn -->
            </div>
        </div>
    </section>
    <!-- end expected premiere -->

    <!-- partners -->
    <section class="section">
        <div class="container">
            <div class="row">
                <!-- section title -->
                <div class="col-12">
                    <h2 class="section__title section__title--no-margin">Our Partners</h2>
                </div>
                <!-- end section title -->

                <!-- section text -->
                <div class="col-12">
                    <p class="section__text section__text--last-with-margin">It is a long <b>established</b> fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using.</p>
                </div>
                <!-- end section text -->

                <!-- partner -->
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <a href="#" class="partner">
                        <img src="{{asset('home')}}/img/partners/themeforest-light-background.png" alt="" class="partner__img">
                    </a>
                </div>
                <!-- end partner -->

                <!-- partner -->
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <a href="#" class="partner">
                        <img src="{{asset('home')}}/img/partners/audiojungle-light-background.png" alt="" class="partner__img">
                    </a>
                </div>
                <!-- end partner -->

                <!-- partner -->
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <a href="#" class="partner">
                        <img src="{{asset('home')}}/img/partners/codecanyon-light-background.png" alt="" class="partner__img">
                    </a>
                </div>
                <!-- end partner -->

                <!-- partner -->
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <a href="#" class="partner">
                        <img src="{{asset('home')}}/img/partners/photodune-light-background.png" alt="" class="partner__img">
                    </a>
                </div>
                <!-- end partner -->

                <!-- partner -->
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <a href="#" class="partner">
                        <img src="{{asset('home')}}/img/partners/activeden-light-background.png" alt="" class="partner__img">
                    </a>
                </div>
                <!-- end partner -->

                <!-- partner -->
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <a href="#" class="partner">
                        <img src="{{asset('home')}}/img/partners/3docean-light-background.png" alt="" class="partner__img">
                    </a>
                </div>
                <!-- end partner -->
            </div>
        </div>
    </section>
    <!-- end partners -->


@endsection
