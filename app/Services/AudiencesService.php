<?php

namespace App\Services;

use App\Http\Resources\Audience\AudienceResource;
use App\Models\Audience;

class AudiencesService
{
    public function all(): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        $query = Audience::query();

        $filters = [];
        $filters = array_merge($filters, request('filter', []));
        $filtersQuery = $query->filter($filters);

        $audiences = $filtersQuery->get();

        return AudienceResource::collection($audiences);
    }
}
