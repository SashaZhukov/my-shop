<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'email' => 'required|string|email|unique:users,email|max:255',
            'password' => 'required|confirmed|string|min:8|max:32',
            'password_confirmation' => 'required|string|min:8|max:32',
        ];
    }

    public function messages(): array
    {
        return [
            'email.required' => 'The “email” field must be filled',
            'email.email.unique' => 'This email is already registered',
            'email.max' => 'The email must be less than 255 characters',
            'email.email' => 'The email must be a valid email address',
            'password.required' => 'The "password" field must be filled',
            'password.min' => 'The "password" must be at least 8 characters',
            'password.max' => 'The "password" must be less than 32 characters',
            'password.confirmed' => 'The "password" and confirmation do not match',
        ];
    }
}