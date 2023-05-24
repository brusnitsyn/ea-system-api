<?php

namespace App\Http\Requests\Comment;

use App\Facades\Equipment;
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
            'text' => ['nullable', 'string']
        ];
    }

    public function update()
    {
        return Equipment::createComment($this->route('commentId'), $this->validated());
    }
}
