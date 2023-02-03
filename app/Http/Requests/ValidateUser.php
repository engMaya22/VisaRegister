<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateUser extends FormRequest
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
            'name' => 'required|string|min:3|max:10',
            'email' => 'required|email|unique:users',
            'password' =>  
                'required|string|min:5',
        ];
    }
    public function messages()
    {
        return [
            'name.min:3' => 'you must Inter at least 3 Characters',
            'name.max:10' => 'you can Inter just to  10 characters',
            'password.min:5'=>'you must Inter at least 5 Numbers',
        ];
    }
}
