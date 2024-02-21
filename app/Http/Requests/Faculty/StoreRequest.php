<?php

namespace App\Http\Requests\Faculty;

use App\Facades\Faculties;
use App\Http\Resources\Faculties\FacultiesResource;
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
            'name' => ['required', 'string', 'min:2'],
            'short' => ['required', 'string', 'min:2'],
            'color' => ['required', 'string', 'min:7', 'max:7'],
        ];
    }

    public function store()
    {
        return Faculties::create($this->validated());
    }
}
