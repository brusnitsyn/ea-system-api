<?php

namespace App\Http\Requests\Account;

use App\Facades\Account;
use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'login' => ['required', 'string'],
            'password' => ['required', 'string'],
        ];
    }

    public function login(): array
    {
        return [
            'token' => Account::login(
                $this->input('login'),
                $this->input('password'),
            )
        ];
    }
}
