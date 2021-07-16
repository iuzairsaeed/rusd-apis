<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SupportRequest extends FormRequest
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
            'title' => ['required','alpha_spaces', 'max:255', 'min:3'],
            'phone' => ['required','regex:/[0-9+*-*]/'],
            'email' => [ 'required', 'string', 'email', 'max:255'],
            'message' => [ 'required', 'string', 'min:10' , 'max:400'],
        ];
    }
    
    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            // "phone.required"=>"The phone number is required",
            // "phone.regex"=>"The phone number is required",
        ];
    }

}
