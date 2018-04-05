<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment_reply extends Model
{
    protected $table = 'comment_replies';

    public function comment()
    {
        return $this->belongsTo('App\Comment');
    }
}
