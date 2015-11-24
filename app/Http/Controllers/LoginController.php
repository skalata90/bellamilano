<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //
    public function showLoginForm(){
    	return view("register",["title"=>"Register / Login"]);

    }

    public function processLogin(Request $request,\Illuminate\Contracts\Auth\Guard $auth){
 
        $credential = [];

        $credential["username"] = $request->get("login_username");
        $credential["password"] = $request->get("login_password");
      
    	if($auth->attempt($credential)){

    		//can login
    		return redirect()->intended('users/'.$auth->user()->id);

    	}else{
    		return redirect("login")->with("message","Try again!");
    	}
    	
    }

    public function logout(\Illuminate\Contracts\Auth\Guard $auth){
        $auth->logout();
        return redirect("index");
    	
    }
}
