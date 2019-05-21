<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function scopeKewl($query)

    {

        return $query->where('kewl', false);

    }
}
