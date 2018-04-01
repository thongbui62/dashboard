<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\UserRequest;
class UserController extends Controller
{
    public function get_add()
    {
    	return view('member.add');
    }
    public function post_add(UserRequest $Request)
    {
    	$dulieu=new User;
    	$user=$Request->user;
    	$pass=bcrypt($Request->pass);
    	$email=$Request->email;
    	$dulieu->name=$user;
    	$dulieu->email=$email;
    	$dulieu->password=$pass;
    	if($dulieu->save())
    	{
    		return redirect()->route('dashboard');
    	}
    }
    public function list_user()
    {
    	$dulieu=User::all()->toArray();
    	return view('member.list',['dulieu'=>$dulieu]);
    }
    public function delete_user($id)
    {
    	$dulieu=User::find($id);
    	if($dulieu->delete())
    	{
    		return redirect()->route('dashboard');
    	}
    }
    public function get_edit_user($id)
    {
        $dulieu=User::find($id)->toArray();

        return view('member.edit',['dulieu'=>$dulieu]);
    }
    public function post_edit_user(UserRequest $Request,$id)
    {
           
        $user=$Request->user;
        $pass=bcrypt($Request->pass);
        $email=$Request->email;
        $dulieu=User::find($id);
        $dulieu->name=$user;
        $dulieu->email=$email;
        $dulieu->password=$pass;
        if($dulieu->save())
        {
           return redirect()->route('dashboard');
        }

    }
}
