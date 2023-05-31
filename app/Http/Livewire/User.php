<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User as UserModel;

class User extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search="";
    protected $users;

    public function render()
    {

        $this->users = UserModel::
       where(function ($q){
           $q->where('name','LIKE','%'. $this->search . '%')
               ->orWhere('email','LIKE','%'.$this->search.'%');
        })->paginate(5);

        return view('livewire.user',[
            'users' => $this->users
        ]);
    }
}
