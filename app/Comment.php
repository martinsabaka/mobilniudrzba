<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function comment_reply()
    {
    	return $this->hasMany('App\Comment_reply');
    }
}
