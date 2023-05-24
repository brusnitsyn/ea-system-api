<?php

namespace App\Http\Requests\Accessories;

use App\Facades\Accessories;
use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth('sanctum')->check(); //&& auth('sanctum')->user()->rule_id === 3;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'equipment_id' => ['nullable', 'numeric'],
            'title' => ['nullable', 'string'],
            'serial' => ['nullable', 'string'],
            'date_buy' => ['nullable', 'date'],
            'date_wrnt' => ['nullable', 'date'],
            'type' => [
                'id' => ['nullable', 'numeric'],
            ],
            'status' => [
                'id' => ['nullable', 'numeric'],
            ],
        ];
    }

    public function update()
    {
        return Accessories::update($this->route('id'), $this->validated());
    }
}
