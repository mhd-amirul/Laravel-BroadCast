<?php

namespace App\Http\Requests\auth;

use Illuminate\Foundation\Http\FormRequest;

class signUpRequest extends FormRequest
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
            "email" => "required|email|unique:users,email",
            "name" => "required",
            "password" => "required|confirmed",
            "password_confirmation" => "required"
        ];
    }
}