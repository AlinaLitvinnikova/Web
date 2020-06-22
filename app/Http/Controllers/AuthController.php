<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
	
    public function auth(Request $request)
	{
		
		$user = User::where([['login',$request->login],['password',$request->password]])->first();
		if (is_null($user)){
		return "неверный логин или пароль";
	}
	Auth::login($user);
	return back()->withInput();
	
}
     public function logout(Request $request)
	 {
		 Auth::logout();
		 return back()->withInput();
	 }


}