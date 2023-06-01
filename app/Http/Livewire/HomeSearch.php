<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Movie;
class HomeSearch extends Component
{
    public $search="";
    public $items;

    public function render()
    {
        if($this->search!="")
            $this->items = Movie::where('name','LIKE','%'.$this->search.'%')->get();
        else
            $this->items=null;
        return view('livewire.home-search',
        [
            'items' => $this->items
        ]);
    }
}
