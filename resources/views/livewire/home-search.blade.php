<div>
    <div class="advanced-search">
        <button type="button" class="category-btn">All Categories</button>
        <div class="input-group">
            <input type="text" placeholder="What do you need?" wire:model="search">
            <div class="fixed" style="z-index:999; background: #4a5568; width:200px;font-size:18px;">
                @foreach($items as $item)
                    <div class="item"><a class="text-white px-3" href="{{route('home.properties_detail',['id' => $item->id])}}"> {{$item->title}}</a></div>
                @endforeach
            </div>
            <button type="button"><i class="ti-search"></i></button>
        </div>
    </div>
</div>
