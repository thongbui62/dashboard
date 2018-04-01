<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\addformRequest;
use App\addformModel;
use App\addelementformModel;
class formController extends Controller
{
    public function get_add_form()
    {
    	return view('form.add_form');
    }
    public function post_add_form(addformRequest $request)
    {
    	$dulieu=new addformModel;
    	$name=$request->form_name;
    	$des=$request->form_des;
    	$dulieu->name=$name;
    	$dulieu->des=$des;
    	if($dulieu->save())
    	{
    		return redirect()->route('get_add_form');
    	}
    }
    public function get_add_element_form()
    {
    	$dulieu=addformModel::all()->toArray();

    	return view('form.add_element',['dulieu'=>$dulieu]);
    }
    public function post_add_element_form(Request $request)
    {
    	$dulieu=$request->all();
        echo "<pre>";
        print_r($dulieu);
        if($dulieu['title']==''||$dulieu['full_name']==''||$dulieu['full_tel']==''||$dulieu['full_main_name']=='')
        {
            return redirect()->route('get_add_element');
        }
    	$mol=new addelementformModel;
    	$mang=array();
    	if(isset($dulieu['full_name']))
    	{
    		$mang=array(
    			'name_input'=>$dulieu['full_name_input_name'],
    			'type_input'=>$dulieu['full_name_input_type'],
    			'place_input'=>$dulieu['full_name'],
    			'id_form'=>$dulieu['title']
    		);
    		$mol::create($mang);
    	}
      
    	if(isset($dulieu['full_tel']))
    	{
    		$mang=array(
    			'name_input'=>$dulieu['full_tel_input_name'],
    			'type_input'=>$dulieu['full_tel_input_type'],
    			'place_input'=>$dulieu['full_tel'],
    			'id_form'=>$dulieu['title']
    		);
    		$mol::create($mang);
    	}
        
    	if(isset($dulieu['full_main_name']))
    	{
    		$mang=array(
    			'name_input'=>$dulieu['full_main_name_input_name'],
    			'type_input'=>$dulieu['full_main_name_input_type'],
    			'place_input'=>$dulieu['full_main_name'],
    			'id_form'=>$dulieu['title']
    		);
    		$mol::create($mang);
    	}
    	if(isset($dulieu['full_add']))
    	{
    		$mang=array(
    			'name_input'=>$dulieu['full_add_input_name'],
    			'type_input'=>$dulieu['full_add_input_type'],
    			'place_input'=>$dulieu['full_add'],
    			'id_form'=>$dulieu['title']
    		);
    		$mol::create($mang);
    	}
    	if(isset($dulieu['full_tel_main_name']))
    	{
    		$mang=array(
    			'name_input'=>$dulieu['full_tel_main_name_input_name'],
    			'type_input'=>$dulieu['full_tel_main_name_input_type'],
    			'place_input'=>$dulieu['full_tel_main_name'],
    			'id_form'=>$dulieu['title']
    		);
    		$mol::create($mang);
    	}
    	if(isset($dulieu['full_email']))
    	{
    		$mang=array(
    			'name_input'=>$dulieu['full_email_input_name'],
    			'type_input'=>$dulieu['full_email_input_type'],
    			'place_input'=>$dulieu['full_email'],
    			'id_form'=>$dulieu['title']
    		);
    		$mol::create($mang);
    	}
    	if(isset($dulieu['full_email_main']))
    	{
    		$mang=array(
    			'name_input'=>$dulieu['full_email_main_input_name'],
    			'type_input'=>$dulieu['full_email_main_input_type'],
    			'place_input'=>$dulieu['full_email_main'],
    			'id_form'=>$dulieu['title']
    		);
    		$mol::create($mang);
    	}
    	if(isset($dulieu['full_birth']))
    	{
    		$mang=array(
    			'name_input'=>$dulieu['full_birth_input_name'],
    			'type_input'=>$dulieu['full_birth_input_type'],
    			'place_input'=>$dulieu['full_birth'],
    			'id_form'=>$dulieu['title']
    		);
    		$mol::create($mang);
    	}
    	if(isset($dulieu['full_job']))
    	{
    		$mang=array(
    			'name_input'=>$dulieu['full_job_input_name'],
    			'type_input'=>$dulieu['full_job_input_type'],
    			'place_input'=>$dulieu['full_job'],
    			'id_form'=>$dulieu['title']
    		);
    		$mol::create($mang);
    	}
    	if(isset($dulieu['full_contry']))
    	{
    		$mang=array(
    			'name_input'=>$dulieu['full_contry_input_name'],
    			'type_input'=>$dulieu['full_contry_input_type'],
    			'place_input'=>$dulieu['full_contry'],
    			'id_form'=>$dulieu['title']
    		);
    		$mol::create($mang);
    	}
    	if(isset($dulieu['full_provice']))
    	{
    		$mang=array(
    			'name_input'=>$dulieu['full_provice_input_name'],
    			'type_input'=>$dulieu['full_provice_input_type'],
    			'place_input'=>$dulieu['full_provice'],
    			'id_form'=>$dulieu['title']
    		);
    		$mol::create($mang);
    	}
    	if(isset($dulieu['gender']))
    	{
    		$mang=array(
    			'name_input'=>$dulieu['gender_input_name'],
    			'type_input'=>$dulieu['gender_input_type'],
    			'place_input'=>$dulieu['gender'],
    			'id_form'=>$dulieu['title']
    		);
    		$mol::create($mang);
    	}
    	if(isset($dulieu['content']))
    	{
    		$mang=array(
    			'name_input'=>$dulieu['content_input_name'],
    			'type_input'=>$dulieu['content_input_type'],
    			'place_input'=>$dulieu['content'],
    			'id_form'=>$dulieu['title']
    		);
    		$mol::create($mang);
    	}
    	return redirect()->route('dashboard');
    }
    public function get_list_form()
    {
    	$dulieu= new addformModel;
    	$dulieu=$dulieu::all()->toArray();
    	
    	return view('form.list_form',['dulieu'=>$dulieu]);
    }
    public function delete_form($id)
    {
    	$dulieu=addformModel::find($id);
    	if($dulieu->delete())
    	{
    		return redirect()->route('dashboard');
    	}
    }
    public function get_edit_form($id)
    {
        $dulieu= new addformModel;
        $dulieu=$dulieu::find($id)->toArray();

        return view('form.edit_form',['dulieu'=>$dulieu]);
    }
    public function post_edit_form(addformRequest $request,$id)
    {
       $name=$request->form_name;
       $des=$request->form_des;
        $dulieu=addformModel::find($id);
        $dulieu->name=$name;
        $dulieu->des=$des;
        if($dulieu->save())
        {
            return redirect()->route('dashboard');
        }
    }
    public function get_select_form($id)
    {
       $dulieu=addformModel::find($id)->element->toArray();
       $count=addformModel::find($id)->element->count();
       $name=addformModel::where('id',$id)->get()->toArray();
       return view('form.select_form',['dulieu'=>$dulieu,'count'=>$count,'name'=>$name]);
    }
}
