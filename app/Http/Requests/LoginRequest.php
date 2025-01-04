<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'loginOrEmail' => 'required|string|max:255|min:4',
            'password' => 'required|string|min:8|max:32',
        ];
    }

    public function messages(): array
    {
        return [
            'loginOrEmail.required' => 'The “email” field must be filled',
            'loginOrEmail.max' => 'The email must be less than 255 characters',
            'password.required' => 'The "password" field must be filled',
            'password.min' => 'The "password" must be at least 8 characters',
            'password.max' => 'The "password" must be less than 32 characters',
        ];
    }
}
