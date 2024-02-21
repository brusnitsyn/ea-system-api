<?php

namespace App\Services;

use App\Http\Resources\TableContent\BaseContentResource;
use App\Http\Resources\TableContent\TableAnotherFillResource;
use App\Http\Resources\TableContent\TableContentResource;
use App\Models\BaseTableContent;
use App\Models\TableAnotherFill;
use App\Models\TableContent;
use App\Models\TableFillEvent;

class TableContentService
{
    public function all()
    {
        $query = BaseTableContent::query();

        $filters = [];
        $filters = array_merge($filters, request('filter', []));
        $filterDate = request('date');

//        if (!is_null($filterDate)) {
//            $query->whereHas('content', $filter = function($query) use ($filterDate) {
//                $query->where('date', '=', $filterDate);
//            })->with('content');
//        }

        $filtersQuery = $query->filter($filters)->orderBy('position');

        $accessories = $filtersQuery->get();

        $baseCollection = array();
        foreach ($accessories as $accessory) {
            $baseCollection[$accessory->id] = [
                'id' => $accessory->id,
                'position' => $accessory->position,
                'interval' => $accessory->interval
            ];

            foreach ($accessory->content as $item) {
                if (!is_null($filterDate)) {
                    if ($item->date === $filterDate) {
                        $baseCollection[$accessory->id][$item->audience->number] = TableContentResource::make($item);
                    }
                }
            }
        }

        return [
            'data' => array_values($baseCollection)
        ];

        // ЖОООООООООООСКИЕ КОСТЫЛИ
    }
    public function create(array $data)
    {
        $data = array_merge($data, array());
        $audienceId = $data['audience_id'];
        $date = $data['date'];

        if (isset($data['fill_type'])) {
            if ($data['fill_type'] === 'faculty')
            {
                $data = array_merge($data, [ 'table_fill_event_id' => null, 'table_another_fill_id' => null ]);
            }
            else if ($data['fill_type'] === 'another')
            {
                $data = array_merge($data, [ 'table_fill_event_id' => null, 'faculty_id' => null ]);
            }
            else if ($data['fill_type'] === 'event')
            {
                if (isset($data['event']))
                {
                    if (!is_null($data['event']['name']))
                    {
                        $createdEvent = TableFillEvent::query()
                            ->create($data['event']);
                        $data = array_merge($data, [ 'table_fill_event_id' => $createdEvent->id, 'faculty_id' => null ]);
                    }
                }
            }
            else if ($data['fill_type'] === 'empty')
            {
                $data = array_merge($data, [ 'table_fill_event_id' => null, 'faculty_id' => null, 'table_another_fill_id' => null ]);
            }
        }

        $accessor = TableContent::query()
            ->updateOrCreate([
                'audience_id' => $audienceId,
                'date' => $date
            ], $data);

        return TableContentResource::make($accessor);
    }
    public function update($id, array $data)
    {
        $data = array_merge($data, array());

        $accessor = TableContent::query()
            ->whereId($id)->first();

        $accessor->update($data);

        return TableContentResource::make($accessor);
    }

    public function getAllBaseContent()
    {
        $query = BaseTableContent::query();

        $filters = [];
        $filters = array_merge($filters, request('filter', []));

        $filtersQuery = $query->filter($filters);

        $accessories = $filtersQuery->get();

        return BaseContentResource::collection($accessories);
    }

    public function getAnotherFill()
    {
        $query = TableAnotherFill::query();

        $filters = [];
        $filters = array_merge($filters, request('filter', []));

        $filtersQuery = $query->filter($filters);

        $accessories = $filtersQuery->get();

        return TableAnotherFillResource::collection($accessories);
    }
}
