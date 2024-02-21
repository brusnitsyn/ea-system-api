<?php

namespace App\Http\Resources\Audience;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FeatureResourceBoard extends JsonResource
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
            'name' => $this->boardSize->name . ' ' . $this->boardType->name,
            'board_size_id' => $this->boardSize->id,
            'name_size' => $this->boardSize->name,
            'board_type_id' => $this->boardType->id,
            'name_type' => $this->boardType->name
        ];
    }
}
