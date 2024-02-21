<?php

namespace App\Services;

use App\Models\Corpus;
use App\Http\Resources\Corpus\CorpusResource;

class CorpusService
{
    public function all()
    {
        $query = Corpus::query();

        $filters = [];
        $filters = array_merge($filters, request('filter', []));
        $filtersQuery = $query->filter($filters);

        $accessories = $filtersQuery->orderBy('name')->get();

        return CorpusResource::collection($accessories);
    }
    public function create(array $data)
    {
        $data = array_merge($data, array());

        $accessor = Corpus::query()
            ->create($data);

        return CorpusResource::make($accessor);
    }
    public function update($id, array $data)
    {
        $data = array_merge($data, array());

        $accessor = Corpus::query()
            ->whereId($id)->first();

        $accessor->update($data);

        return CorpusResource::make($accessor);
    }
}
