<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateVisa extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nickname' => 'required',
            'fatherName' => 'required',
            'date_of_birth'=> 'required',
            'arrival_date'=> 'required',
            'personal_image' => 'required',
            'passport_image' => 'required',
            'proffession' => 'required',
        ];
    }
}
