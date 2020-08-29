<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    protected $fillable= ['title', 'slug', 'body', 'category_id', 'thumbnail'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function getTakeImageAttribute(){
        return "/storage/" . $this->thumbnail;
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    public function author()
    {
        return $this->belongsTo(user::class, 'user_id');
    }
}
