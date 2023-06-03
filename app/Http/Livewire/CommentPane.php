<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use App\Models\CommentLike;
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
    public function likeComment($id,$type){

        if(Auth::check()){
            $comment = CommentLike::where('liked_by',Auth::user()->id)->where('comment_id',$id)->first();
            #is new?

            if($comment===null){
                $newLike = new CommentLike();
                $newLike->liked_by =  Auth::user()->id;
                $newLike->type = "LIKE";
                $newLike->comment_id = $id;
                $newLike->save();
            }
            #update like2dislike, dislike2like
            else {
                $comment->type = $type;
                $comment->save();
            }
        }else
        {
            return redirect()->route("login");
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

        $movieList = \App\Models\Movie::where('category_id',$movie->category_id)->where('id','!=',$this->movieId)->get();
        return view('livewire.comment-pane',[
            'movie' => $movie,
            'movieList' => $movieList
        ]);
    }
}
