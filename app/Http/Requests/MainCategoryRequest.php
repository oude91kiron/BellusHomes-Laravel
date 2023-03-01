<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MainCategoryRequest extends FormRequest
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
            'name' => 'required|max:255',
            'is_active' => 'boolean',
<<<<<<< HEAD
            'type' => 'required|in:1,2',
=======
>>>>>>> 906fb739a5b9019237cea8642e78277ea6d3deb7
        ];
    }
}
