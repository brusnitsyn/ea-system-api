<?php

namespace App\Services;

use App\Facades\Faculties;
use App\Http\Resources\Faculties\FacultiesResource;
use App\Models\Faculty;

/**
 * @mixin \App\Facades\Faculties
 **/
class FacultiesService
{
    public function all(): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        $query = Faculty::query();

        $faculties = $query->get();
        return FacultiesResource::collection($faculties);
    }

    public function create(array $data)
    {
        $data = array_merge($data, array());

        $accessor = Faculty::query()
            ->create($data);

        return FacultiesResource::make($accessor);
    }
}
