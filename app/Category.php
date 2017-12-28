<?php

namespace Learnio;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function posts()
    {
        return $this->hasMany('App\Post', 'Category_id');
    }

    

}
