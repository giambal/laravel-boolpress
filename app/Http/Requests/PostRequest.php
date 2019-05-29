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
           "title"=>"required",
           "writer_name"=>"required",
           "writer_lastname"=>"required",
           "content"=>"required"
         ];
     }

     public function messages()
     {
       return[
         "title.required"=>"Miss title",
         "writer_name.required"=>"miss name",
         "writer_lastname.required"=>"miss last name",
         "content.required"=>"miss content"
       ];
     }
}
