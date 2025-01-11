<?php

namespace App\Http\Requests\admin;

use App\Rules\StartsWithUpperCase;
use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
            'login' => 'required|string|max:32|min:2|unique:users,login',
            'first_name' => ['required', 'string', 'max:32', 'min:2', new StartsWithUpperCase],
            'last_name' => ['required', 'string', 'max:32', 'min:2', new StartsWithUpperCase],
            'phone' => 'required|string|max:32|unique:users,phone',
            'password' => 'required|confirmed|string|min:8|max:32',
            'password_confirmation' => 'required|string|min:8|max:32',
            'role' => 'required',
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
            'login.required' => 'The "name" field must be filled',
            'login.max' => 'The "name" must be less than 32 characters',
            'login.min' => 'The "name" must be at least 4 characters',
            'login.unique' => 'The "name" must be unique',
            'first_name.required' => 'The "First name" field must be filled',
            'first_name.max' => 'The "First name" must be less than 32 characters',
            'first_name.min' => 'The "First name" must be at least 2 characters',
            'first_name.startsWithUpperCase' => 'Your custom message for first_name',
            'last_name.required' => 'The "Last name" field must be filled',
            'last_name.max' => 'The "Last name" must be less than 32 characters',
            'last_name.min' => 'The "Last name" must be at least 2 characters',
            'last_name.startsWithUpperCase' => 'Your custom message for first_name',
            'phone.required' => 'The "Phone" field must be filled',
            'phone.max' => 'The "Phone" must be less than 32 characters',
            'phone.unique' => 'The "Phone" must be unique',
        ];
    }
}
