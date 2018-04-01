<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Http\Requests\LoginRequest;
class LoginController extends Controller
{
    public function login()
    {
        if(!Auth::check())
            {
                return view('login.login');
            }
        else
        {
            return redirect()-> route('dashboard');
        }
    	
    }
    public function post_login(LoginRequest $Request)
    {
    	 $user=$Request->user;
    	 $pass=$Request->pass;
    	if (Auth::attempt(['name' => $user, 'password' => $pass])) {
            // Authentication passed...
            return redirect()->route('dashboard');
        }
        else
        {
        	return redirect()->back();
        }

    }
    public function logout()
    {
    	Auth::logout();
    	return redirect()->route('get_login');
    }
}
