<?php

namespace App\Http\Resources\Audience;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AudienceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'department_id' => $this->department_id
        ];
    }
}
