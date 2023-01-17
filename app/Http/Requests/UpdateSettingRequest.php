<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSettingRequest extends FormRequest
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
            'header_logo'               => 'mimes:jpeg,png,jpg',
            'footer_logo'               => 'mimes:jpeg,png,jpg',
            'favicon'                   => 'mimes:jpeg,png,jpg',
            'contact_number'            => ['required'],
            'contact_email'             => ['required', 'email'],
            'location_address'          => ['nullable', 'string', 'min:10', 'max:100'],
            'contact_whatsapp'          => ['nullable', 'string', 'min:5', 'max:20'],
            'linkedin_account_link'     => ['nullable', 'url'],
            'instagram_account_link'    => ['nullable', 'url'],
            'google_account_link'       => ['nullable', 'url'],
            'facebook_account_link'     => ['nullable', 'url'],
            'youtube_account_link'      => ['nullable', 'url'],
            'footer_location_text'      => ['nullable', 'string'],
            'footer_text'               => ['nullable', 'string'],
            'title'                     => ['nullable', 'string', 'min:10', 'max:60'],
            'keywords'                  => ['nullable', 'string', 'min:50', 'max:160'],
            'description'               => ['nullable', 'string', 'min:50', 'max:160']
        ];
    }
}
