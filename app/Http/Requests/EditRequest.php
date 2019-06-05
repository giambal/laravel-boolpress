<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditRequest extends FormRequest
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
        "title"=>"required|min:5",
        "content"=>"required|min:20",
        "categories"=>"required"
      ];
    }

    public function messages()
    {
      return[
        "title.required"=>"Miss title",
        "content.required"=>"miss content",
        "categories.required"=>"miss category"
      ];
    }
}
