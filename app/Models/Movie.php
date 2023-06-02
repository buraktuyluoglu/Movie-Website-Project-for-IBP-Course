<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Movie extends Model
{
    use HasFactory;
    use SoftDeletes;
    public function category(){
        return $this->belongsTo(Category::class,"category_id","id");
    }

    public function comments(){
        return $this->hasMany(Comment::class,"movie_id","id");
    }

    public function scopeSortedComments($query)
    {
        return $query->with(['comments' => function ($query) {
            $query->orderBy('created_at', 'desc');
        }]);
    }
}
