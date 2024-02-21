<?php

namespace App\Http\Requests\Corpus;

use App\Facades\Accessories;
use App\Facades\Corpus;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;//auth('sanctum')->check() && auth('sanctum')->user()->rule_id === 1;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
        ];
    }

    public function store()
    {
        return Corpus::create($this->validated());
    }
}
