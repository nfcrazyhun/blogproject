<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsersEditRequest;
use App\Http\Requests\UsersRequest;
use App\User;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(5);
        return view('admin.users.listUsers', compact('users') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all()->pluck('name','id')->all();
        return view('admin.users.createUsers', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param UsersRequest $request
     * @return array
     */
    public function store(UsersRequest $request)
    {
        //show message
        Session::flash('message','The user has benn created.');

        //store
        $request['password'] = bcrypt($request->getPassword());
        User::create($request->all());

        return redirect(route('users.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::all()->pluck('name','id')->all();
        return view('admin.users.editUsers', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UsersEditRequest $request, $id)
    {
        //show message
        Session::flash('message','The user has updated.');

        $user = User::findOrFail($id);


        $user->update($request->all());
        return redirect( route('users.index' ));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //delete user
        User::findOrFail($id)->delete();

        //show message
        Session::flash('message','The user has benn deleted.');

        return redirect( route('users.index' ));
    }
}
