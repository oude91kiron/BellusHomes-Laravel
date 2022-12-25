<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SitedataRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'company_name' => 'required|string|max:100',
            'email' => 'required|email|string|max:100',
            'facebook' => 'required|string|max:100',
            'twitter' => 'required|string|max:100',
            'whatsapp' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'instagram' => 'required|string|max:100',
            'photo' => 'required|mimes:jpg,png,jpeg,jfif|max:4000'
        ];
    }
}
