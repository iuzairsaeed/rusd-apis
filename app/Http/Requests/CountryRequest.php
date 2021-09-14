<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CountryRequest extends FormRequest
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
            '*.country' => ['bail','required','alpha_spaces', 'max:255', 'min:3','unique:countries,country,NULL, NULL,user_id, ' . auth()->id()],
            '*.nic' => ['bail','required', 'numeric', 'min:6' , 'digits_between:6,20', 'unique:countries'],
            '*.expiry_date' => ['bail','required', 'date', 'after:now'],
            '*.passport_expiry_date' => ['bail','required', 'date', 'after:now'],
            '*.passport_no' => ['bail','required', 'string', 'max:8', 'unique:countries'],
            '*.tax_payer' => ['bail','required', 'boolean'],
            '*.tax_no' => ['bail','required', 'numeric','unique:countries'],
        ];
    }

    //     /**
    //  * Get the error messages for the defined validation rules.
    //  *
    //  * @return array
    //  */
    // public function messages()
    // {
    //     return [
    //         '*.nic.unique' => 'This NIC has already registered',
    //         '*.passport_no.unique' => 'This Passport has already registered',
    //         '*.tax_no.unique' => 'This Tax-# has already registered',
    //     ];
    // }
}
