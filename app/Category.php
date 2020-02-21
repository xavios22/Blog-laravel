<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    /**
     * The Post that belong to the category.
     */

     public function post()
     {
        return $this->belongsToMany('App\Post');
     }
}
