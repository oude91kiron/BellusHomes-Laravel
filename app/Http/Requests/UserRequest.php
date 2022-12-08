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
            'name' => 'required|string|max:100',
            'email' => 'required|email|string|max:100',
            'position' => 'required|string|max:100',
            'facebook' => 'required|string|max:100',
            'twitter' => 'required|string|max:100',
            'whatsapp' => 'required|numeric',
            'instagram' => 'required|string|max:100',
            'photo' => 'required|mimes:jpg,png,jpeg,jfif|max:4000'

        ];
    }

    public function messages()
    {
        return [

         
            'email.required' => 'Email is Required',
            'email.email' => 'Invalid Imail',
            'position.required' => 'Enter a job position',
            'facebook.required' => 'Enter your facebook account URL',
            'twitter.required' => 'Enter your facebook twitter URL',
            'whatsapp.required' => 'Enter your whatsapp number, only numbers accepted',
            'instagram.required' => 'Enter your instagram account URL',
            'photo.required' => 'Add a personal photo please!'

            ];
    }
}