<?php

namespace App\Http\Controllers;

use Request;
use App\User; 
use Illuminate\Support\Facades\Validator;
use Session;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $users = User::orderBy('role_id')->get();

        //return View::make('users.index')->with('users', $users);
        return view('users.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        // load the create form (app/views/nerds/create.blade.php)
        return view('users.create');
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
            'name'       => 'required',
            'email'      => 'required|email',
            'role_id' => 'required|numeric',
        );
        $validator = Validator::make(Request::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('users/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $user = new User;
            $user->name = Request::get('name');
            $user->email = Request::get('email');
            $user->role_id = Request::get('role_id');
            $user->password = bcrypt(Request::get('password'));
            $user->save();

            // redirect
            Session::flash('message', 'Successfully created nerd!');
            return Redirect::to('dashboard/users');
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
        $user = User::find($id);

        return view('users.show', ['user' => $user]);
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
        $user = User::find($id);

        // show the edit form and pass the nerd
        return view('users.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'name'       => 'required',
            'email'      => 'required|email',
            'role_id' => 'required|numeric'
        );
        $validator = Validator::make(Request::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('users/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput(Request::except('password'));
        } else {
            // store
            $user = User::find($id);
            $user->name = Request::get('name');
            $user->email = Request::get('email');
            $user->role_id = Request::get('role_id');
            $user->save();

            // redirect
            Session::flash('message', 'Successfully updated user!');
            return Redirect::to('dashboard/users');
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
        $user = User::find($id);
        $user->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the user!');
        return Redirect::to('dashboard/users');
    }
}
