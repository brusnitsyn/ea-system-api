<?php

namespace App\Http\Requests\TableContent;

use App\Facades\TableContent;
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
            'fill_type' => ['required'],
            'date' => ['required'],
            'audience_id' => ['required'],
            'faculty_id' => ['nullable'],
            'table_another_fill_id' => ['nullable'],
            'base_table_content_id' => ['required'],
            'event.name' => ['nullable'],
            'event.owner' => ['nullable'],
            'event.comment' => ['nullable'],
        ];
    }

    public function store()
    {
        return TableContent::create($this->validated());
    }
}
