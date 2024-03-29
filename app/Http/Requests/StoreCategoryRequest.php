<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class StoreCategoryRequest extends FormRequest
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
            'name' => 'required|min:5|max:255|unique'
        ];
    }
    public function messages(){
        return [
            'required' => ':attribute Không được để trống',
            'min' => ':attribute Không được ít hơn 2 ký tự',
            'max' => ':attribute Không được nhiều hớn 100 ký tự'
        ];
    }
    public function attributes(){
        return [
            'name' => 'Tên danh mục sản phẩm'
        ];
    }
}
