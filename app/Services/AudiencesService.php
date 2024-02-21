<?php

namespace App\Services;

use App\Http\Resources\Audience\AudienceResource;
use App\Http\Resources\Audience\FeatureResource;
use App\Models\Audience;
use App\Models\AudienceFeature;
use const Grpc\STATUS_NOT_FOUND;

class AudiencesService
{
    public function all(): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        $query = Audience::query();

        $filters = [];
        $filters = array_merge($filters, request('filter', []));
        $filtersQuery = $query->filter($filters);

        $audiences = $filtersQuery->orderBy('number')->get();

        return AudienceResource::collection($audiences);
    }

    public function create(array $data)
    {
        $data = array_merge($data, array());

        $boards = $data['feature']['boards'];

        $accessor = Audience::query()
            ->create($data);

        $audienceFeature = array_merge($data['feature'], ['audience_id' => $accessor->id]);
        AudienceFeature::query()
            ->create($audienceFeature);

        if (isset($boards)) {
            $feature = $accessor->feature()->first();
            $audienceBoards = $feature->boards()->get();
            foreach ($audienceBoards as $audienceBoard) {
                $audienceBoard->delete();
            }
            foreach ($boards as $board) {
                $feature->boards()->create($board);
            }
        }

        return AudienceResource::make($accessor);
    }

    public function update(array $data)
    {
        $id = $data['id'];
        $feature = $data['feature'];
        $boards = $feature['boards'];

        $audience = Audience::query()->
            whereId($id)->first();
        $audience->update($data);

        $audienceFeature = $audience->feature()->updateOrCreate(
            ['audience_id' => $audience->id],
            $feature
        );

        if (isset($boards)) {
            $feature = $audience->feature()->first();
            $audienceBoards = $feature->boards()->get();
//            dd($audienceBoards);
            foreach ($audienceBoards as $audienceBoard) {
                $audienceBoard->delete();
            }
            foreach ($boards as $board) {
                $feature->boards()->create($board);
            }
        }
    }

    public function getAudienceFeature($audienceId)
    {
        $audienceFeature = Audience::whereId($audienceId)->first()->feature;
        if ($audienceFeature)
            return FeatureResource::make($audienceFeature);
        else
            return response()->json(null, '404');
    }

    public function createAudienceFeature(array $data)
    {
//        $audienceInfo = AudienceFeature::where('audience_id', $id)->get();
//        return $audienceInfo;
    }
}
