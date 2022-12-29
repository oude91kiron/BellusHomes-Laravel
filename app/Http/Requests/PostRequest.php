<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            //
            'title' => 'required|string|max:250',
            'headline' => 'required|string|max:250',
            'paragraph' => 'required|string|max:10000',
            'firstSubhead' => 'required|string|max:250',
            'secondParagraph' => 'required|string|max:10000',
            'secondHeadline' => 'required|string|max:250',
            'thirdParagraph' => 'required|string|max:10000',
            'categories' => 'required|string|max:250',
            'tags' => 'required|string|max:100',
            'post_image' => 'required|mimes:jpg,png,jpeg,jfif|max:4000'

        
        ];
    }
}
