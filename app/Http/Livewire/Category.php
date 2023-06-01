<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Category as CategoryModel;

class Category extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search="";
    protected $categories;

    public function render()
    {

        $this->categories = CategoryModel::where(function($q){
            $q->where('title','LIKE','%'.$this->search.'%')
            ->orWhere('description','LIKE','%'.$this->search.'%');
        })->paginate(5);
        return view('livewire.category',[
            'categories' => $this->categories
        ]);
    }
}
