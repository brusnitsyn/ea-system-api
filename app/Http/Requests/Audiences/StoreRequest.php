<?php

namespace App\Http\Requests\Audiences;

use App\Facades\Audiences;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'min:2'],
            'number' => ['required', 'string', 'min:2'],
            'corpus_id' => ['required', 'numeric'],

            'feature.capacity' => ['required', 'numeric'],
            'feature.computers_count' => ['numeric', 'min:0'],
            'feature.multimedia' => ['bool'],
            'feature.interact_board' => ['bool'],
            'feature.features' => ['nullable', 'max:240'],
            'feature.boards' => ['nullable'],
        ];
    }

    public function store()
    {
        return Audiences::create($this->validated());
    }
}
