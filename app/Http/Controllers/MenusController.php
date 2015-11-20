<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MenusController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $menu = \App\Models\Menu::all();
        
        return view('menu',['menu'=>$menu , "title"=>"Our Menu"]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        return view('admin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(\App\Http\Requests\CreateMenuRequest $request)
    {
        //

        $menu = \App\Models\Menu::create($request->all());

        $menu->save();

        return redirect('menus');
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

        $menu = \App\Models\Menu::find($id);

        return view('menu',['menu'=>$menu]);
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
        $menu = \App\Models\Menu::find($id);

        return view('menu',['menu'=>$menu]);

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
        $menu = \App\Models\Menu::find($id);

        $value = $request->input("value");
        $field = $request->input("field");

        $menu->$field = $value;

        $menu->save();

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
        $menu = \App\Models\Menu::find($id);

        $menu->delete();

        return redirect("menus");
    }
}
