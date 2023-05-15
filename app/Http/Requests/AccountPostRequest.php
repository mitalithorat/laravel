<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AccountPostRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'firstname' => '',
            'lastname' => '',
            'username' => 'required|max:50',
            'contact' => 'required|max:10',
            'email' => 'required|email|unique:users',
            'country' => '',
            'state' => '',
            'street' => '',
            'pincode' => 'required'
            //
        ];
    }
}
