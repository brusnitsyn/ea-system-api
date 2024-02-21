<?php

namespace App\Http\Resources\TableContent;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BaseContentResource extends JsonResource
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
            'position' => $this->position,
            'interval' => $this->interval
        ];
    }
}
