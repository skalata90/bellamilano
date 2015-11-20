<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function __construct(){
        $this->middleware('auth', ['only' => ['showAdmin']]);
        $this->middleware('admin', ['only' => ['showAdmin']]);

    }
    //
    public function showHome(){

    	return view('index');

    }

    public function showContact(){

    	return view('contact',["title"=>"Contact us"]);
    	
    }

    public function showBooking(){

    	return view('booking',["title"=>"Make a booking"]);
    	
    }

    public function showAdmin(){

        return view('admin',["users"=>\App\Models\User::all()]);
        
    }

}
