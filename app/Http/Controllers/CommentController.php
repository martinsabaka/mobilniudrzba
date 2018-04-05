<?php

namespace App\Http\Controllers;

use Request;
use Auth;
use App\Comment;
use App\Blog_post; 
use Illuminate\Support\Facades\Validator;
use Session;
use Illuminate\Support\Facades\Redirect;
use DB;

class CommentController extends Controller
{
    public function getAllComments()
    {
    	$posts = Comment::All();

        //return view('comments', ['comments' => $comments]);
    }

    public function findBlogComments($id)
    {
    	$comments = Comment::where('blog_post_id', $id)->get;

    	return $comments;
    }

    public function addComment()
    {
    	$rules = array(
            'title' => 'required',
            'content' => 'required',
            'id' => 'required',
        );
        $validator = Validator::make(Request::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('blog')
                ->withErrors($validator);

        } else {
            // store
            $comment = new Comment;
            $comment->title = Request::get('title');
            $comment->content = Request::get('content');
            $comment->blog_post_id = Request::get('id');
            $comment->user_id = \Auth::user()->id;
            $comment->save();

            // redirect
            Session::flash('message', 'Successfully created nerd!');
            return Redirect::to('blog/' . Request::get('id'));
        }
    }
}
