<?php

namespace App\Services;

use App\Http\Resources\Accessories\AccessorResource;
use App\Models\Accessories;
use App\Models\StatusAccessories;
use App\Models\TypeOfAccessories;

class AccessoriesService
{
    public function all()
    {
        $query = Accessories::query();

        $filters = [];
        $filters = array_merge($filters, request('filter', []));
        $filtersQuery = $query->filter($filters);

        $accessories = $filtersQuery->get();

        return AccessorResource::collection($accessories);
    }
    public function create(array $data)
    {
        $data = array_merge($data, array('date_check' => \Date::now(),
            'type_id' => $data['type']['id'],
            'status_id' => $data['status']['id']));

        $accessor = Accessories::query()
            ->create($data);

        return AccessorResource::make($accessor);
    }
    public function update($id, array $data)
    {
        $data = array_merge($data, array('date_check' => \Date::now(),
            'type_id' => $data['type']['id'],
            'status_id' => $data['status']['id']));

        $accessor = Accessories::query()
            ->whereId($id)->first();

        $accessor->update($data);

        return AccessorResource::make($accessor);
    }

    public function allTypes()
    {
        $query = TypeOfAccessories::query();

        $filters = [];
        $filters = array_merge($filters, request('filter', []));
        $filtersQuery = $query->filter($filters);

        $typeOfAccessories = $filtersQuery->get();

        return AccessorResource::collection($typeOfAccessories);
    }

    public function allStatuses()
    {
        $query = StatusAccessories::query();

        $filters = [];
        $filters = array_merge($filters, request('filter', []));
        $filtersQuery = $query->filter($filters);

        $statusAccessories = $filtersQuery->get();

        return AccessorResource::collection($statusAccessories);
    }
}
