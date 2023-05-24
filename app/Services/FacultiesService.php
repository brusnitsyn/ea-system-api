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
}
