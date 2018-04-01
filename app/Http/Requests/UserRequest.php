<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'user'=>'required',
            'email'=>'required|email',
            'pass'=>'required',
        ];
    }
    public function messages()
    {
        return [
         
            'user.required'  =>'Tên đăng nhập không được để trống',
            'email.required'  =>'Email không được để trống',
            'email.email'  =>'Email nhập vào không đúng định dạng',
            'pass.required'  =>'Mật khẩu không được để trống',
        ];
    }
}
