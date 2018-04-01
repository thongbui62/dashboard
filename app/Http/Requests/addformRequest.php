<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class addformRequest extends FormRequest
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
            'form_name'=>'required',
            'form_des'=>'required',
            
        ];
    }
    public function messages()
    {
        return [
            'form_name.required' => 'Tên form không được để trống',
            'form_des.required'  => 'Mô tả không được để trống',
            
        ];
    }
}
