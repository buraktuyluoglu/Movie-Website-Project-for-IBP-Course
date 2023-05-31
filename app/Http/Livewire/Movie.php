<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Movie as MovieModel;

class Movie extends Component
{
    use WithPagination;

    public $search = "";
    protected $movies = [];

    public function render() {
        $this->movies = MovieModel:: where(function ($q){
            $q->where('name','LIKE','%'. $this->search . '%')
                ->orWhere('descriptions','LIKE','%'.$this->search.'%');
        })->paginate(5);
        return view('livewire.movie',[
            'movies' => $this->movies
        ]);
    }
}
