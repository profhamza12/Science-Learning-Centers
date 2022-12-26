<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
    public function rules() {
        $rules = [];
        if ($this->exists('username')) $rules['username'] = 'required|min:5';
        if ($this->exists('email')) $rules['email'] = 'required|email';
        if ($this->exists('password')) $rules['password'] = 'required|min:5';
        return $rules;
    }
    public function messages() {
        return [
            'username.required' => 'username field is required!!',
            'username.min' => 'username must be larger than 5 characters!!',
            'password.required' => 'password field is required!!',
            'password.required' => 'password must be larger than 5 characters!!',
            'email.required' => __('validation.required'),
            'email.email' => __('validation.email')
        ];
    }
}
