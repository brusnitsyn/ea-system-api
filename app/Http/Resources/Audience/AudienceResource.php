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
            'number' => $this->number,
            'corpus_id' => $this->when($this->corpus_id, $this->corpus_id)
        ];
    }
}
