<?php

namespace App\Http\Resources\Audience;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FeatureResource extends JsonResource
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
            'capacity' => $this->capacity,
            'multimedia' => $this->multimedia,
            'computers_count' => $this->computers_count,
            'interact_board' => $this->interact_board,
            'features' => $this->features,
            'boards' => $this->when(count($this->boards), FeatureResourceBoard::collection($this->boards), [])
        ];
    }
}
