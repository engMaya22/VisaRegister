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
            'nickname' => 'required|string|min:3|max:10',
            'fatherName' => 'required|string|min:3|max:10',
            'date_of_birth'=> 'required',
            'arrival_date'=> 'required',
            'personal_image' => 'required|image|mimes:jpeg,jpg,png,gif|max:3000',
            'passport_image' => 'required|image|mimes:jpeg,jpg,png,gif|max:3000',
            'proffession' => 'required|string|min:3|max:14',
        ];
    }
    public function messages()
    {
        return [
            'nickname.min:3' => ' you must Inter at least 3 characters',
            'nickname.max:10' => ' you can Inter just to  10 characters',
            'fatherName.min:3' => ' you must Inter at least 3 characters',
            'fatherName.max:10' => ' you can Inter just to  10 characters',
            'proffession.min:3' => ' you must Inter at least 3 characters',
            'proffession.max:14' => ' you can Inter just to  14 characters',
        ];
    }
}
