<?php

namespace App\Http\Requests\Accessories;

use App\Facades\Accessories;
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
            'equipment_id' => ['required', 'numeric'],
            'title' => ['required', 'string'],
            'serial' => ['required', 'string'],
            'date_buy' => ['required', 'date'],
            'date_wrnt' => ['required', 'date'],
            'type' => [
                'id' => ['required', 'numeric'],
            ],
            'status' => [
                'id' => ['required', 'numeric'],
            ],
        ];
    }

    public function store()
    {
        return Accessories::create($this->validated());
    }
}
