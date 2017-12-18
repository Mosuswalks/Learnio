<?php

namespace Learnio;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    //
    public function scopePhpThreads($query)
    {
        return $query->where('categories_id', 1);
    }

    public function scopePythonThreads($query)
    {
        return $query->where('categroies_id', 2);
    }
}
