<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class CategorynewsRequest extends FormRequest
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
            'name_categorynew' => 'required|min:5|max:2550',
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
            'name_categorynew.required' => 'Yêu cầu bạn nhập tiêu đề danh mục tin tức, khuyến mại',
            'name_categorynew.min' => 'Yêu cầu bạn nhập nhiều hơn 5 ký tự',
            'name_categorynew.max' => 'Yêu cầu bạn nhập ít hơn 2550 ký tự',
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
            //
        ];
    }
}
