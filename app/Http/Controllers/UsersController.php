<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{

    public function __construct(){

        $this->middleware('auth', ['except' => ['create','store']]);
        $this->middleware('account', ['only' => ['edit','update','show']]);
        $this->middleware('admin', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        return view('register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(\App\Http\Requests\CreateUserRequest $request)
    {
        //

        $user = \App\Models\User::create($request->all());

        //encrypt password
        $user->password = bcrypt($user->password);
        $user->save();

        return redirect('users/'.$user->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //

        $user = \App\Models\User::find($id);

        return view('userProfile',['user'=>$user, "title"=>"User Profile"]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
        $user = \App\Models\User::find($id);

        return view('userProfile',['user'=>$user]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
        $user = \App\Models\User::find($id);

        $value = $request->input("value");
        $field = $request->input("field");

        $user->$field = $value;

        $user->save();

        return $value;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
        $user = \App\Models\User::find($id);

        $user->delete();

        return redirect("admin");
    }
}
