<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCouponRequest extends FormRequest
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
            'title' => 'required|string|min:3|max:150',
            'coupon_code' => 'required|string|min:3|max:20',
            'short_description' => 'required|string|min:3|max:200',
            'long_description' => ['required'],
            'image' => ['required'],
            // 'banner_image' => ['required'],
            'start_date' => ['required'],
            'expire_date' => ['required'],
            'redirect_site_name' => ['required'],
            'redirect_site_url' => 'required|url'
        ];
    }
}
