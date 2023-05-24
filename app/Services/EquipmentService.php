<?php

namespace App\Services;

use App\Http\Resources\Comment\CommentResource;
use App\Http\Resources\Equipment\EquipmentDetailResource;
use App\Http\Resources\Equipment\EquipmentResource;
use App\Models\Comment;
use App\Models\Equipment;

class EquipmentService
{
    public function all(): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        $query = Equipment::query();

        $filters = [];
        $filters = array_merge($filters, request('filter', []));
        $filtersQuery = $query->filter($filters);

        $equipments = $filtersQuery->get();

        return EquipmentResource::collection($equipments);
    }

    public function get($id)
    {
        $query = Equipment::query();
        $equipment = $query->whereId($id)->first();

        return EquipmentResource::make($equipment);
    }

    public function create(array $data)
    {
        $data = array_merge($data, array('audience_id' => $data['audience']['id'],
            'worker_id' => $data['worker']['id']));

        $equipment = Equipment::query()
            ->create($data);

        return EquipmentResource::make($equipment);
    }

    /*
        Создание, обновление и удаление комментариев
    */
    public function createComment($id, array $data)
    {
        $data = array_merge($data, array('user_id' => auth('sanctum')->user()->id));

        $equipment = Equipment::query()
            ->whereId($id)->first();

        $equipment->comments()->create($data);

        return EquipmentResource::make($equipment);
    }
    public function updateComment($id, array $data)
    {
        $comment = Comment::query()
            ->whereId($id)->first();

        $comment->update($data);

        return CommentResource::make($comment);
    }
}
