<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductTypeRequest extends FormRequest
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
            'name' => 'required|min:6|max:255|unique:producttype,name',

        ];

    }
    public function message(){
        return [
            'required' => ':attribute Khong duoc bo trong',
            'min' =>':attribute Khong duoc it hon 6 ky tu',
            'max' => ':attribute khong duoc nhieu hon 255 ky tu',
            'unique' => ':attribute khong duoc them du lieu da ton tai'
        ];
    }
    public function attributes(){
        return[
            'name' => 'Ten loai san pham',
        ];
    }
}
