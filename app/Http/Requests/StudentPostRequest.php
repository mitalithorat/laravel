<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentPostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'firstname' => 'required|max:50',
            'lastname' => '',
            'email' => 'required|email|unique:users',
            'contact' => 'required|max:10',
            'birthday' => '',
            'subject' => '',
            'gender' => '',
            'hobbies' => '',
            'address' => ''
            //
        ];
    }
}