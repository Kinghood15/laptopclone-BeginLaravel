<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class PostproductsRequest extends FormRequest
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
            'title_postproduct' => 'required|min:5|max:2550',
            'description_postproduct' => 'required|min:5',
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
            'title_postproduct.required' => 'Yêu cầu bạn nhập tiêu đề bài viết tin tức, khuyến mại',
            'title_postproduct.min' => 'Yêu cầu bạn nhập nhiều hơn 5 ký tự',
            'title_postproduct.max' => 'Yêu cầu bạn nhập ít hơn 2550 ký tự',
            'description_postproduct.required' => 'Yêu cầu bạn nhập mô tả bài viết tin tức, khuyến mại',
            'description_postproduct.min' => 'Yêu cầu bạn nhập nhiều hơn 5 ký tự',
            
        ];
    }
}
