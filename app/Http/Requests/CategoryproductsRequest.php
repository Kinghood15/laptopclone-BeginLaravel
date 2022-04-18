<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class CategoryproductsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // only allow updates if the user is logged in
        return backpack_auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            // 'name' => 'required|min:5|max:255'
            'name_categoryproduct' => 'required|min:5|max:2550',
            'imageproduct' => 'required',
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            //
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name_categoryproduct.required' => 'Yêu cầu bạn nhập tiêu đề danh mục sản phẩm',
            'name_categoryproduct.min' => 'Yêu cầu bạn nhập nhiều hơn 5 ký tự',
            'name_categoryproduct.max' => 'Yêu cầu bạn nhập ít hơn 2550 ký tự',
            'imageproduct.required' => 'Yêu cầu bạn nhập hình ảnh đại diện danh mục sản phẩm' 
        ];
    }
}
