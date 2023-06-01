<div class="container">
    <div class="row">
        <div class="col-12 col-lg-8 col-xl-8">
            <!-- content tabs -->
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="1-tab">
                    <div class="row">
                        <!-- comments -->
                        <div class="col-12">
                            <div class="comments">
                                <ul class="comments__list">
                                    @foreach($movie->comments as $comment)
                                        @if($comment->parent_id==0)
                                            <li class="comments__item">
                                                <div class="comments__autor">
                                                    <img class="comments__avatar" src="{{asset('home')}}/img/user.png" alt="">
                                                    <span class="comments__name">{{$comment->user->name}}</span>
                                                    <span class="comments__time">{{$comment->created_at}}</span>
                                                </div>
                                                <p class="comments__text">{{$comment->comment}}</p>
                                                <div class="comments__actions">
                                                    <div class="comments__rate">
                                                        <button type="button"><i class="icon ion-md-thumbs-up"></i>{{count($comment->getLikes())}}</button>

                                                        <button type="button">{{count($comment->getLikes())}}<i class="icon ion-md-thumbs-down"></i></button>
                                                    </div>

                                                    <button type="button" wire:click="renderForm({{$loop->index}},{{$comment->id}})"><i class="icon ion-ios-share-alt" ></i>Reply</button>
                                                    @if($comment->user_id===Auth::user()->id)
                                                        <button type="button" wire:click="deleteComment({{$comment->id}})"><i class="fas fa-trash" ></i>Delete</button>
                                                    @endif
                                                </div>
                                            </li>
                                            @foreach($comment->answers as $answer)
                                                <li class="comments__item comments__item--answer">
                                                    <div class="comments__autor">
                                                        <img class="comments__avatar" src="{{asset('home')}}/img/user.png" alt="">
                                                        <span class="comments__name">{{$answer->user->name}}</span>
                                                        <span class="comments__time">{{$answer->created_at}}</span>
                                                    </div>
                                                    <p class="comments__text">{{$answer->comment}}</p>
                                                    <div class="comments__actions">
                                                        <div class="comments__rate">
                                                            <button type="button"><i class="icon ion-md-thumbs-up"></i>{{count($answer->getLikes())}}</button>

                                                            <button type="button">{{count($answer->getDislikes())}}<i class="icon ion-md-thumbs-down"></i></button>
                                                        </div>
                                                        @if($answer->user_id===Auth::user()->id)
                                                            <button type="button" wire:click="deleteComment({{$answer->id}})"><i class="fas fa-trash" ></i>Delete</button>
                                                        @endif
                                                    </div>
                                                    @if($showForm === $loop->parent->index && $loop->count-1===$loop->index)
                                                        <div class="form mt-5" >
                                                            <input type="hidden" wire:model="parent_id"/>
                                                            <input type="hidden" wire:model="movie_id" value="{{$movie->id}}"/>
                                                            <textarea id="text" wire:model="comment" class="form__textarea" placeholder="Add comment"></textarea>
                                                            <button type="submit" class="form__btn" wire:click="submitComment()">Send</button>
                                                        </div>
                                                    @endif
                                                </li>
                                            @endforeach
                                            <!--Parentsa ve yanıtı yoksa -->
                                            @if($showForm === $loop->index && count($comment->answers)<=0)
                                                <div class="form mt-2 mb-5" >
                                                    <input type="hidden" wire:model="parent_id"/>
                                                    <input type="hidden" wire:model="movie_id" value="{{$movie->id}}"/>
                                                    <textarea id="text" wire:model="comment" class="form__textarea" placeholder="Add comment"></textarea>
                                                    <button type="submit" class="form__btn" wire:click="submitComment()">Send</button>
                                                </div>
                                            @endif
                                        @endif
                                    @endforeach

                                </ul>
                                @if($showForm === -1)
                                    <div class="form mt-5" >
                                        <input type="hidden" wire:model="parent_id" value="0"/>
                                        <input type="hidden" wire:model="movie_id" value="{{$movie->id}}"/>
                                        <textarea id="text" wire:model="comment" class="form__textarea" placeholder="Add comment"></textarea>
                                        <button type="submit" class="form__btn" wire:click="submitComment()">Send</button>
                                    </div>
                                @endif

                            </div>
                        </div>
                        <!-- end comments -->
                    </div>
                </div>
            </div>
            <!-- end content tabs -->
        </div>

        <!-- sidebar -->
        <div class="col-12 col-lg-4 col-xl-4">
            <div class="row">
                <!-- section title -->
                <div class="col-12">
                    <h2 class="section__title section__title--sidebar">You may also like...</h2>
                </div>
                <!-- end section title -->

                <!-- card -->
                <div class="col-6 col-sm-4 col-lg-6">
                    <div class="card">
                        <div class="card__cover">
                            <img src="img/covers/cover.jpg" alt="">
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
                <div class="col-6 col-sm-4 col-lg-6">
                    <div class="card">
                        <div class="card__cover">
                            <img src="img/covers/cover2.jpg" alt="">
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
                <div class="col-6 col-sm-4 col-lg-6">
                    <div class="card">
                        <div class="card__cover">
                            <img src="img/covers/cover3.jpg" alt="">
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
                <div class="col-6 col-sm-4 col-lg-6">
                    <div class="card">
                        <div class="card__cover">
                            <img src="img/covers/cover4.jpg" alt="">
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
                <div class="col-6 col-sm-4 col-lg-6">
                    <div class="card">
                        <div class="card__cover">
                            <img src="img/covers/cover5.jpg" alt="">
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
                <div class="col-6 col-sm-4 col-lg-6">
                    <div class="card">
                        <div class="card__cover">
                            <img src="img/covers/cover6.jpg" alt="">
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
            </div>
        </div>
        <!-- end sidebar -->
    </div>
</div>
