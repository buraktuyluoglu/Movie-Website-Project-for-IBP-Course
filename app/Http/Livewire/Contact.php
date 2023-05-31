<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ContactMessage;
use Livewire\WithPagination;

class Contact extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search="";
    protected $contactMessages;

    public function render()
    {

        $this->contactMessages = ContactMessage::
        where(function ($q){
            $q->where('subject','LIKE','%'. $this->search . '%')
                ->orWhere('text','LIKE','%'.$this->search.'%')
                ->orWhere('email','LIKE','%'.$this->search.'%');
        })->paginate(5);

        return view('livewire.contact',[
            'contactMessages' => $this->contactMessages
        ]);
    }
}
