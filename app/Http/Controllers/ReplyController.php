<?php

namespace App\Http\Controllers;

use Request;
use Auth;
use App\Blog_post; 
use Illuminate\Support\Facades\Validator;
use Session;
use Illuminate\Support\Facades\Redirect;
use DB;
use App\Comment;
use App\Comment_Reply;

class ReplyController extends Controller
{
        public function findCommentReplies($id)
    {
    	$comments = Comment_reply::where('comment_id', $id)->get;

    	return $comments;
    }

    public function addReply()
    {
    	$rules = array(
            'title' => 'required',
            'content' => 'required',
            'comment_id' => 'required',
        );
        $validator = Validator::make(Request::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('blog/' . Request::get('blog/' . Request::get('blog_id')))
                ->withErrors($validator);

        } else {
            // store
            $reply = new Comment_reply;
            $reply->title = Request::get('title');
            $reply->content = Request::get('content');
            $reply->comment_id = Request::get('comment_id');
            $reply->user_id = \Auth::user()->id;
            $reply->save();

            // redirect
            Session::flash('message', 'Successfully created reply!');
            return Redirect::to('blog/' . Request::get('blog_id'));
        }
    }
}
