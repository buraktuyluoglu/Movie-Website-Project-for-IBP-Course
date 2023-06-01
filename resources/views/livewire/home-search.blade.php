<div>
<style>
    .header_search--results{
        background: #2b2b31;
        color:#fff;
        font-size:18px;
    }
    .header_search--results .item:hover a{
        color:#ff577d;;
    }
</style>
    <form action="#" class="header__search header__search--active">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header__search-content">
                        <input type="text" placeholder="Search for a movie, TV Series that you are looking for" wire:model="search">
                    </div>
                    <div class="fixed header_search--results" >
                    @if($items !=null)
                            @foreach($items as $item)
                                <div class="item"><a class="text-white px-3" href="{{route('home.movie_show',['id' => $item->id])}}"> {{$item->name}}</a></div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
