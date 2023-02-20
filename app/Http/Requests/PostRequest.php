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
            
            // ________ Title + P1 _______
            'title' => 'required|string|max:250',
            'paragraph' => 'required|string|max:10000',
            
            // ________ Headline 1 + P2 _______
            'headline' => 'required|string|max:250',
            'secondParagraph' => 'required|string|max:10000',

            //________ Quote + P3 ________
            'firstSubhead' => 'required|string|max:250',
            'thirdParagraph' => 'required|string|max:10000',
            
            //________ headline 2 + P4 ________
            'secondHeadline' => 'required|string|max:250',
            'paragraph4' => 'required|string|max:10000',
           
            //________ P5 & catg/tags ________
            'paragraph5' => 'required|string|max:10000',            
            'categories' => 'required|string|max:250',
            'tags' => 'required|string|max:100',
            
            //________ Image ________
            'post_image' => 'mimes:jpg,png,jpeg,jfif|max:4000'

        
        ];
    }
}
