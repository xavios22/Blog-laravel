<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    /**
     * The roles that belong to the post.
     */
    public function categorie()
    {
        return $this->belongsToMany(Category::class, 'category_post');
    }
}
