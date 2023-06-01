<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function user(){
        return $this->belongsTo(User::class,"user_id","id");
    }

    public function answers(){
        return $this->hasMany(Comment::class,"parent_id","id");
    }
    public function movie(){
        return $this->belongsTo(Movie::class,"movie_id","id");
    }
    public function likes(){
        return $this->hasMany(CommentLike::class,"comment_id","id");
    }

    public function scopeGetLikes(){
        return $this->likes()->where("type","LIKE")->get();
    }

    public function getDislikes(){
        return $this->likes()->where("type","DISLIKE")->get();
    }
}
