<?php

namespace App\Http\Controllers;

use App\User;
use App\Blog_post;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App;

class PostController extends Controller
{
    // function gets post from database based on its ID
    public function getQuill($id)
    {   
        if (App::isLocale('sk')) {
            $post = DB::table('posts')->select('id', 'url', 'title', 'content')->where('id', $id)->first();
        }

        if (App::isLocale('cs')) {
            $post = DB::table('posts')->select('id', 'url', 'title_cs AS title', 'content_cs AS content')->where('id', $id)->first();
        }

        if (App::isLocale('en')) {
            $post = DB::table('posts')->select('id', 'url', 'title_en AS title', 'content_en AS content')->where('id', $id)->first();
        }

        return view('quill', ['post' => $post]);
    }
    
    public function editPost(Request $request)
    {
        if (App::isLocale('sk')) {
            $column_to_edit = 'content';
        }

        if (App::isLocale('cs')) {
            $column_to_edit = 'content_cs';
        }

        if (App::isLocale('en')) {
            $column_to_edit = 'content_en';
        }

        $this->validate($request, [
             'body' => 'required'
        ]);
        DB::table('posts')
            ->where('id', $request['postId'])
            ->update([$column_to_edit => $request['body']]);
        //    ->update(['content' => $request['body']]);

        return response()->json(['message' => 'Post edited'], 200);
        
    }

    public function updateBlog(Request $request)
    {
        $this->validate($request, [
            'blogTitle' => 'required',
            'body' => 'required'
        ]);
        DB::table('blog_posts')
            ->where('id', $request['blogId'])
            ->update([
                'title' => $request['blogTitle'], 
                'content' => $request['body'],
            ]);
            
        return response()->json(['message' => 'Blog post edited'], 200);
        
    }

    public function createBlog(Request $request)
    {
        $this->validate($request, [
            'blogTitle' => 'required',
            'body' => 'required'
        ]);

        $blog = new Blog_post;
        $blog->title = $request['blogTitle'];
        $blog->content = $request['body'];
        $blog->user_id = $request['user'];
        $blog->save();

        // redirect
        return response()->json(['message' => 'Blog post edited'], 200);
    }

    public function showBlog($id)
    {
        $blog = Blog_post::find($id);

        return view('blogs.showBlog', ['blog' => $blog]);
    }
   
}