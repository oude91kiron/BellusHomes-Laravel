<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class UserRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email',
            'position' => 'required'|'max:100',
            'facebook' => 'required'|'max:100',
            'instagram' => 'required'|'max:100',
            'twitter' => 'required'|'max:100',
            'whatsapp' => 'required'|'numeric'|'max:100',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ];
    }

    public function messages()
    {
        return [

            'email.required' => 'Email is Required',
            'email.email' => 'Invalid Imail',
            'password.required' => 'Password is Required',
            'position.required' => 'Position Required',
            'facebook.required' => 'Please add you facebook accout URL',
            'instagram.required' => 'Please add you instagram accout URL',
            'twitter.required'  => 'Please add you twitter accout URL',
            'whatsapp.required' => 'add you phone number',
            'photo.required' => 'Upload an image'
            ];
    }
}
