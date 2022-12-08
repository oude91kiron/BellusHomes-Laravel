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
            
           
            'building_age' => 'nullable|max:100',
            'name' => 'nullable|max:100',
            'parking' => 'nullable|max:100',
            'slug' => 'nullable|unique:properties,slug',
            'description' => 'required|max:1000',
            'tags' => 'nullable',
            'location' => 'nullable|max:100',
            'city_id'=>'required|exists:cities,id'
          
        
        ];
    }
}
