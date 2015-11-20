<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ReviewsController extends Controller
{

    public function __construct(){

        $this->middleware('auth', ['except' => ['index','show']]);
      
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $review = \App\Models\Review::all();

        return view('review',['review'=>$review, "title"=>"Our Reviews"]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        return view('addReview');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(\App\Http\Requests\CreateReviewRequest $request)
    {
        //

        $review = \App\Models\Review::create($request->all());

        $review->save();

        return redirect('reviews');
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

        // $review = \App\Models\Review::find($id);

        // return view('review',['review'=>$review]);
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

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
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
        $review = \App\Models\Review::find($id);

        $review->delete();

        return redirect("reviews");
    }
}
