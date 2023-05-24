<?php

namespace App\Http\Resources\Equipment;

use App\Http\Resources\Accessories\AccessorResource;
use App\Http\Resources\Comment\CommentResource;
use App\Http\Resources\User\UserResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EquipmentResource extends JsonResource
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
            'comments' => CommentResource::collection($this->comments),
            'accessories' => AccessorResource::collection($this->accessories),
            'worker' => UserResource::make($this->worker)
        ];
    }
}
