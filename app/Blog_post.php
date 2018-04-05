<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog_post extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
