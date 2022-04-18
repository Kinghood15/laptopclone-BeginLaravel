<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class ProductsRequest extends FormRequest
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
            'name_product' => 'required|min:5|max:2550',
            'cpu' => 'required|max:255',
            'gpu' => 'required|max:255',
            'memory' => 'required',
            'ram' => 'required|max:255',
            'display' => 'required|max:255',
            'color' => 'required|max:255',
            'weight' => 'required|max:255',
            'quanlity' => 'required|max:5000',
            'discount' => 'required|max:100',
            'quotedprice' => 'required',
            'price' => 'required',
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
            'name_product.required' => 'Yêu cầu bạn nhập tên sản phẩm',
            'name_product.min' => 'Yêu cầu bạn nhập nhiều hơn 5 ký tự',
            'name_product.max' => 'Yêu cầu bạn nhập ít hơn 2550 ký tự',
            
            'cpu.required' => 'Yêu cầu bạn nhập cpu',
            'cpu.max' => 'Yêu cầu bạn nhập ít hơn 255 ký tự của cpu',

            'gpu.required' => 'Yêu cầu bạn nhập gpu',
            'gpu.max' => 'Yêu cầu bạn nhập ít hơn 255 ký tự của card đồ hoạ',

            'memory.required' => 'Yêu cầu bạn nhập bộ nhớ',
            'memory.max' => 'Yêu cầu bạn nhập ít hơn 255 ký tự của bộ nhớ',

            'ram.required' => 'Yêu cầu bạn nhập ram',
            'ram.max' => 'Yêu cầu bạn nhập ít hơn 255 ký tự của ram',

            'display.required' => 'Yêu cầu bạn nhập màn hình',
            'display.max' => 'Yêu cầu bạn nhập ít hơn 255 ký tự của màn hình',

            'color.required' => 'Yêu cầu bạn nhập màu',
            'color.max' => 'Yêu cầu bạn nhập ít hơn 255 ký tự của màu',

            'weight.required' => 'Yêu cầu bạn nhập cân nặng',
            'weight.max' => 'Yêu cầu bạn nhập ít hơn 255 ký tự của cân nặng',
            
            'quanlity.required' => 'Yêu cầu bạn nhập số lượng',
            'quanlity.max' => 'Yêu cầu bạn nhập ít hơn 255 ký tự của số lượng',
            
            'discount.required' => 'Yêu cầu bạn nhập giảm giá',
            'discount.max' => 'Yêu cầu bạn nhập ít hơn 255 ký tự của giảm giá',

            'quotedprice.required' => 'Yêu cầu bạn nhập giá niêm yết',
            'quotedprice.max' => 'Yêu cầu bạn nhập ít hơn 255 ký tự của giá niêm yết',
            
            'price.required' => 'Yêu cầu bạn nhập giá sản phẩm',
            'price.max' => 'Yêu cầu bạn nhập ít hơn 255 ký tự của giá sản phẩm',
        ];
    }
}
