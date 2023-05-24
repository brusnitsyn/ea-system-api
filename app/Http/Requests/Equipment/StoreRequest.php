<?php

namespace App\Http\Requests\Equipment;

use App\Facades\Equipment;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth('sanctum')->check() && auth('sanctum')->user()->rule_id === 1;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'string'],
            'serial' => ['required', 'string'],
            'audience' => [
                'id' => ['required', 'number']
            ],
            'worker' => [
                'id' => ['required', 'number']
            ]
        ];
    }

    public function store()
    {
        return Equipment::create($this->validated());
    }
}
