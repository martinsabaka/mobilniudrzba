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

class BlogController extends Controller
{
    
    public function getAllBlogs()
    {
    	$posts = DB::table('blog_posts')->paginate(2);

        return view('blogs', ['posts' => $posts]);
    }

    public function showBlog($id)
    {
    	$blog = DB::table('blog_posts')->where('id', $id)->first();

        $comments = Comment::where('blog_post_id', $id)->get();

    	return view('blogs.showBlog', ['blog' => $blog, 'comments' => $comments]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $posts = Blog_post::all();

        return view('blogs.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'title'       => 'required',
            'content'      => 'required',
        );
        $validator = Validator::make(Request::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('dashboard/blogs/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $post = new Blog_post;
            $post->title = Request::get('title');
            $post->content = Request::get('content');
            $post->user_id = Auth::user()->id;
            $post->save();

            // redirect
            Session::flash('message', 'Successfully created blog post!');
            return Redirect::to('dashboard/blogs');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $post = Blog_post::find($id);

        return view('blogs.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        // get the nerd
        $post = Blog_post::find($id);

        // show the edit form and pass the nerd
        return view('blogs.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request)
    {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        
        $rules = array(
            'title'       => 'required',
            'content'      => 'required',
        );
        $validator = Validator::make(Request::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('dashboard/blogs/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput(Request::except('password'));
        } else {
            // store
            $post = Blog_post::find($id);
            $post->title = Request::get('title');
            $post->content = Request::get('content');
            $post->save();

            // redirect
            Session::flash('message', 'Successfully updated Blog Post!');
            return Redirect::to('dashboard/blogs');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        // delete
        $post = Blog_post::find($id);
        $post->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the Blog Post!');
        return Redirect::to('dashboard/blogs');
    }

}
