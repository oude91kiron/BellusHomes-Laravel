<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GeneralPropertyRequest extends FormRequest
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
            
            'name' => 'required|max:100',
            'building_age' => 'required|max:100',
            'parking' => 'nullable|max:100',
            'description' => 'required|max:2000',
            'location' => 'required|max:100',
            'city_id'=>'required|exists:cities,id'
          
        
        ];
    }
}
