<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'name' => 'required|min:2|max:255|unique:product,name',
            'description' => 'required|min:2',
            'quantity' => 'required|integer',
            'price' => 'required|integer',
            'promotional' =>'integer',
            'image' =>'required|image',

        ];
    }
    public function messages(){
        return [
            'required' => ':attribute Không được bỏ trống trường này',
            'min' => ':attribute Tối thiểu 2 kí tự',
            'max' => ':attribute Tối đa 255 ký tự',
            'integer' => ':attribute Phải là một số nguyên',
            // 'float' => ':attribute Phải là một số thực',
            'image' => ':attribute Không phải hình ảnh'
        ];
    }
    public function attributes(){
        return [
            'name' => 'Tên sản phẩm',
            'description' => 'Mô tả sản phẩm',
            'price' => 'Đơn giá sản phẩm',
            'quantity' => 'Số lượng sản phẩm',
            'promotionnal' => 'Khuyến mại sản phẩm',
            'image' => 'Hình ảnh sản phẩm'
        ];
    }
}
