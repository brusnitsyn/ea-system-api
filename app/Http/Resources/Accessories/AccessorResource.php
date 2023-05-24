<?php

namespace App\Http\Resources\Accessories;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AccessorResource extends JsonResource
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
            'serial' => $this->serial,
            'type' => TypeResource::make($this->type),
            'status' => StatusResource::make($this->status),
            'date_buy' => $this->date_buy,
            'date_check' => $this->date_check,
            'date_wrnt' => $this->date_wrnt,
            'updated_at' => $this->updated_at
        ];
    }
}
