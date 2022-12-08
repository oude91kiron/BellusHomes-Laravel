<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CityRequest extends FormRequest
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
            'name'=>'required|string|max:100',
            'photo'=>'required_without:id|mimes:jpg,png,jpeg,jfif|max:4000'
        ];
    }



    /**
     * 
     */
    public function messages()
    {
        return [

            'name'=> 'Enter the name of the cite please',
            'photo'=>'Upload a photo please'

        ];
    }
}
