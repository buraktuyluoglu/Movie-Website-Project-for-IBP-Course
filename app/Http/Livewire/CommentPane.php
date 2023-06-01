<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CommentPane extends Component
{
    public $movieId;
    public $showForm = -1;

    public $parent_id=0;
    public $comment;
    public $movie_id;

    public function mount($id){
        $this->movieId = $id;
    }
    public function renderForm($id,$pId){
        if($id === $this->showForm){
            $this->showForm = -1;
            $this->parent_id = 0;
        }
    else{
            $this->showForm = $id;
            $this->parent_id = $pId;
        }

    }
    public function deleteComment($id){
        #yoruma gelen yanıtlar silinir

        $comment = Comment::find($id);

        if($comment->user_id === Auth::user()->id && $comment->parent_id ===0){
            $subComments = Comment::where('parent_id',$id);
            $subComments->delete();
        }
        $comment->delete();
    }

    public function submitComment(){

        $comment = new Comment();
        $comment->parent_id = $this->parent_id;
        $comment->comment = $this->comment;
        $comment->user_id = Auth::user()->id;
        $comment->movie_id = $this->movieId;
        $comment->save();

        $this->comment = "";
    }

    public function render()
    {
        $movie = \App\Models\Movie::find($this->movieId);
        if(count($movie->comments)<1){
            $this->showForm = -1;
        }
        return view('livewire.comment-pane',[
            'movie' => $movie
        ]);
    }
}
