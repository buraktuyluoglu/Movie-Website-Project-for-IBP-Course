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
                                                        <button type="button" wire:click="likeComment({{$comment->id}},'LIKE')"><i class="icon ion-md-thumbs-up"></i>{{count($comment->getLikes())}}</button>

                                                        <button type="button" wire:click="likeComment({{$comment->id}},'DISLIKE')">{{count($comment->getDislikes())}}<i class="icon ion-md-thumbs-down"></i></button>
                                                    </div>
                                                    @auth
                                                        <button type="button" wire:click="renderForm({{$loop->index}},{{$comment->id}})"><i class="icon ion-ios-share-alt" ></i>Reply</button>
                                                        @if($comment->user_id===Auth::user()->id)
                                                            <button type="button" wire:click="deleteComment({{$comment->id}})"><i class="fas fa-trash" ></i>Delete</button>
                                                        @endif
                                                    @endauth
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
                                                            <button type="button"  wire:click="likeComment({{$answer->id}},'LIKE')"><i class="icon ion-md-thumbs-up"></i>{{count($answer->getLikes())}}</button>

                                                            <button type="button"  wire:click="likeComment({{$answer->id}},'DISLIKE')">{{count($answer->getDislikes())}}<i class="icon ion-md-thumbs-down"></i></button>
                                                        </div>
                                                        @auth
                                                            @if($answer->user_id===Auth::user()->id)
                                                                <button type="button" wire:click="deleteComment({{$answer->id}})"><i class="fas fa-trash" ></i>Delete</button>
                                                            @endif
                                                        @endauth
                                                    </div>
                                                    @auth
                                                        @if($showForm === $loop->parent->index && $loop->count-1===$loop->index)
                                                            <div class="form mt-5" >
                                                                <input type="hidden" wire:model="parent_id"/>
                                                                <input type="hidden" wire:model="movie_id" value="{{$movie->id}}"/>
                                                                <textarea id="text" wire:model="comment" class="form__textarea" placeholder="Add comment"></textarea>
                                                                <button type="submit" class="form__btn" wire:click="submitComment()">Send</button>
                                                            </div>
                                                        @endif
                                                    @endauth

                                                </li>
                                            @endforeach
                                            <!--Parentsa ve yanıtı yoksa -->
                                            @auth
                                                @if($showForm === $loop->index && count($comment->answers)<=0)
                                                    <div class="form mt-2 mb-5" >
                                                        <input type="hidden" wire:model="parent_id"/>
                                                        <input type="hidden" wire:model="movie_id" value="{{$movie->id}}"/>
                                                        <textarea id="text" wire:model="comment" class="form__textarea" placeholder="Add comment"></textarea>
                                                        <button type="submit" class="form__btn" wire:click="submitComment()">Send</button>
                                                    </div>
                                                @endif
                                           @endauth
                                        @endif
                                    @endforeach

                                </ul>
                                @auth
                                @if($showForm === -1)
                                    <div class="form mt-5" >
                                        <input type="hidden" wire:model="parent_id" value="0"/>
                                        <input type="hidden" wire:model="movie_id" value="{{$movie->id}}"/>
                                        <textarea id="text" wire:model="comment" class="form__textarea" placeholder="Add comment"></textarea>
                                        <button type="submit" class="form__btn" wire:click="submitComment()">Send</button>
                                    </div>
                                @endif
                                @else
                                     <a href="{{route('login')}}" style="color:#fff;text-indent: 5px;font-weight: 400;font-size:18px;border-bottom:1px solid #fff;">Please Login to Make Comment</a>
                                @endauth

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
            @foreach($movieList as $item)
                <!-- card -->
                <div class="col-6 col-sm-4 col-lg-6">
                    <div class="card">
                        <div class="card__cover">
                            <img src="{{Storage::url($item->image)}}" alt="">
                            <a href="{{route('home.movie_show',['id' => $item->id])}}" class="card__play">
                                <i class="icon ion-ios-play"></i>
                            </a>
                        </div>
                        <div class="card__content">
                            <h3 class="card__title"><a href="{{route('home.movie_show',['id' => $item->id])}}">{{$item->name}}</a></h3>
                            <span class="card__category">
										<a href="#">{{$item->category->title}}</a>
									</span>
                            <span class="card__rate"><i class="icon ion-ios-star"></i>8.4</span>
                        </div>
                    </div>
                </div>
                <!-- end card -->
                @endforeach
            </div>
        </div>
        <!-- end sidebar -->
    </div>
</div>
